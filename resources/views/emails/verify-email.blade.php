@component('mail::message')
# Vérifiez votre adresse e-mail

Merci de vous être inscrit ! Avant de commencer, veuillez vérifier votre adresse e-mail en cliquant sur le bouton ci-dessous :

@component('mail::button', ['url' => $url])
Vérifier l'adresse e-mail
@endcomponent

Si vous n'avez pas créé de compte, aucune action supplémentaire n'est requise.

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
