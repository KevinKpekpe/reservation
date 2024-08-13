<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Shop :: Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <style>
        .selected-image {
            width: 100px;
            /* Définissez la largeur souhaitée */
            height: 100px;
            /* Définissez la hauteur souhaitée */
            object-fit: cover;
            /* Pour ajuster l'image dans le conteneur sans déformer */
            margin-right: 5px;
            /* Ajoutez un espacement entre les images */
        }
    </style>
</head>
