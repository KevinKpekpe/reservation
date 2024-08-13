<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> KEVIN Hotel </title>

    <link rel=icon href="{{asset('assets/img/logo-favicon.png')}}" sizes="16x16" type="icon/png">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flatpicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


</head>

<body>

    <header class="header-style-01">

        <nav class="navbar navbar-area navbar-border navbar-padding navbar-expand-lg">
            <div class="container custom-container-one nav-container">
                <div class="logo-wrapper">
                   <h3>LAR-HOTEL</h3>
                </div>
                <div class="responsive-mobile-menu d-lg-none">
                    <a href="javascript:void(0)" class="click-nav-right-icon">
                        <i class="las la-ellipsis-v"></i>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hotel_booking_menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="hotel_booking_menu">
                    <ul class="navbar-nav">
                        <li class="">
                            <a href="{{route('home')}}">Home</a>

                        </li>
                        <li><a href="{{route('about')}}"> A propos  </a></li>
                        <li><a href="{{route('rooms')}}"> Nos chambres </a></li>
                        <li><a href="{{route('contact')}}"> Contact </a></li>
                    </ul>
                </div>
                <div class="navbar-right-content show-nav-content">
                    <div class="single-right-content">
                        <div class="navbar-author">
                            @auth
                            <div class="navbar-author-flex">
                                <div class="navbar-author-thumb">
                                    <img src="{{ asset('storage/' . Auth::user()->profil) }}" alt="img">
                                </div>
                                <div class="navbar-author-name">
                                    <h6 class="navbar-author-name-title"> {{Auth::user()->name}} </h6>
                                </div>
                            </div>
                            <div class="navbar-author-wrapper">
                                <div class="navbar-author-wrapper-list">
                                    <a href="{{route('dashboard.profil')}}" class="navbar-author-wrapper-list-item"> Profil  </a>
                                    <a href="{{route('logout')}}" class="navbar-author-wrapper-list-item"> Logout </a>
                                </div>
                            </div>
                            @endauth
                            @guest
                            <div class="navbar-author-flex">
                                <div class="navbar-author-name">
                                    <a href="{{route('login')}}" class="navbar-author-name-title"> <i class="las la-door-open"></i> Login </a>
                                </div>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

