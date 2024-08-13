@extends('frontend.base')
@section('content')
@include('frontend.layouts.breadcrumb-area')

    <section class="contact-area pat-100 pab-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <div class="contact-thumb">
                        <img src="assets/img/single-page/contact.jpg" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="contact-wrapper contact-padding bg-white radius-20">
                        <div class="contact-contents">
                            <h4 class="contact-contents-title">Laissez-nous un message  </h4>
                            <p class="contact-contents-para mt-2"> Notre équipe vous repondra dans les plus bref delais . </p>
                            <div class="contact-contents-form custom-form">
                                <form action="{{ route('contact.submit') }}" method="POST">
                                    @csrf
                                    <div class="single-flex-input mt-4">
                                        <div class="single-input mt-4">
                                            <input type="text" name="nom" class="form--control radius-5" placeholder="Votre nom" required>
                                        </div>
                                        <div class="single-input mt-4">
                                            <input type="text" name="postnom" class="form--control radius-5" placeholder="Votre post nom" required>
                                        </div>
                                    </div>
                                    <div class="single-input mt-4">
                                        <input type="email" name="email" class="form--control radius-5" placeholder="Email" required>
                                    </div>
                                    <div class="single-input mt-4">
                                        <input type="tel" name="telephone" class="form--control radius-5" id="phone" placeholder="Numéro de tel" required>
                                    </div>
                                    <div class="single-input mt-4">
                                        <textarea name="message" class="form--control form-message radius-5" required></textarea>
                                    </div>
                                    <button type="submit" class="submit-btn radius-5">Envoyer le message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
