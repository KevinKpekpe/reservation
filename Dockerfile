FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip

# Nettoyer le cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir la variable d'environnement pour permettre à Composer de s'exécuter en tant que root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Définir le répertoire de travail
WORKDIR /var/www

# Copier les fichiers de l'application
COPY . /var/www

# Installer les dépendances de l'application
RUN composer install --no-scripts --no-autoloader

# Générer l'autoloader et exécuter les scripts
RUN composer dump-autoload --optimize && \
    composer run-script post-autoload-dump

# Définir les permissions
RUN chown -R www-data:www-data /var/www
RUN chmod -R 755 /var/www/storage /var/www/bootstrap/cache

# Exposer le port 9000
EXPOSE 9000

CMD ["php-fpm"]
