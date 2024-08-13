<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> KEVIN Hotel </title>

    <link rel=icon href="favicon.png" sizes="16x16" type="icon/png">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flatpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>
    <section class="login-area padding-top-100 padding-bottom-100">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img src="assets/img/single-page/login.jpg" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Welcome! </h2>
                        <p class="sigle-para mt-2"> Conectez-vous pour continuer </p>
                        <form class="login-wrapper-contents-form custom-form" method="POST" action="">
                            @csrf
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email </label>
                                <input class="form--control" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Mot de passe </label>
                                <input class="form--control" type="password" name="password"
                                    placeholder="Votre mot de passe">
                            </div>

                            <button class="submit-btn w-100 mt-4" type="submit"> Se connecter </button>
                            <span class="account color-light mt-3"> Pas encor memnbre ? <a class="color-one"
                                    href="{{route('signup')}}"> Créez un compte </a> </span>
                        </form>
                        <div class="single-checkbox mt-3">
                            <div class="checkbox-inline">
                                <input class="check-input" type="checkbox" id="check15">
                                <label class="checkbox-label" for="check15"> Se rappeler de moi </label>
                            </div>
                            <div class="forgot-password">
                                <a href="" class="forgot-btn color-one"> Mot de passe oublié ? </a>
                            </div>
                        </div>
                        <div class="login-bottom-contents">
                            <div class="or-contents mb-3">
                                <span class="or-contents-para"> Ou </span>
                            </div>
                            <div class="login-others">
                                <div class="login-others-single">
                                    <a href="" class="login-others-single-btn w-100">
                                        <img src="assets/img/single-page/google.png" alt="">
                                        <span class="login-para"> Se connecter avec Google </span>
                                    </a>
                                </div>
                                <div class="login-others-single">
                                    <a href="javascript:void(0)" class="login-others-single-btn w-100">
                                        <img src="assets/img/single-page/facebook.png" alt="">
                                        <span class="login-para"> Se connecter avec facebook </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="mouse-move mouse-outer"></div>
    <div class="mouse-move mouse-inner"></div>



    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/flatpicker.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider-8.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
