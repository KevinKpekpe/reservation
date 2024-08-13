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
    <section class="l-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img src="assets/img/single-page/login.jpg" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title"> Welcome! </h2>
                        <form class="login-wrapper-form custom-form padding-top-20" method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="input-flex-item">
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Nom </label>
                                    <input class="form--control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Votre nom">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Post-nom </label>
                                    <input class="form--control @error('lastname') is-invalid @enderror" type="text" name="lastname" placeholder="Votre post-nom">
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Date de naissance </label>
                                <input class="form--control @error('date_naissance') is-invalid @enderror" type="date" name="date_naissance">
                                @error('date_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Adresse </label>
                                <textarea class="form--control @error('adresse') is-invalid @enderror" name="adresse" placeholder="Votre adresse"></textarea>
                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-flex-item">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Téléphone </label>
                                <input class="form--control @error('telephone') is-invalid @enderror" type="tel" name="telephone" placeholder="Votre numéro de téléphone">
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Code postal </label>
                                <input class="form--control @error('code_postal') is-invalid @enderror" type="text" name="code_postal" placeholder="Votre code postal">
                                @error('code_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div class="input-flex-item">
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email Address </label>
                                <input class="form--control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Votre email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Username </label>
                                <input class="form--control @error('username') is-invalid @enderror" type="text" name="username" placeholder="Votre nom d'utilisateur">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Profile </label>
                                <input class="form--control @error('profil') is-invalid @enderror" type="file" name="profil">
                                @error('profil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-flex-item">
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Password </label>
                                    <input class="form--control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Mot de passe">
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Confirmer le mot de passe </label>
                                    <input class="form--control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe">
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <button class="submit-btn w-100 mt-4" type="submit"> Créer mon compte </button>
                            <span class="account color-light mt-3"> Vous avez déjà un compte ? <a class="color-one" href="{{ route('login') }}"> Connectez-vous </a> </span>
                        </form>

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
