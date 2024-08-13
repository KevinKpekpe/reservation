@extends('frontend.base')
@section('content')
@include('frontend.layouts.breadcrumb-area')
<div class="body-overlay"></div>
    <div class="dashboard-area section-bg-2 dashboard-padding">
        <div class="container">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <div class="dashboard-left-content">
                    @include('frontend.profil.navigation')
                </div>
                <div class="dashboard-right-contents mt-4 mt-lg-0">
                    <div class="dashboard-reservation">
                        <div class="single-reservation bg-white base-padding">
                            <div class="single-reservation-flex mb-4">
                                <div class="single-reservation-author">
                                    <div class="single-reservation-author-flex">
                                        <div class="single-reservation-author-thumb">
                                            <img src="{{ asset('storage/' . Auth::user()->profil) }}" alt="img">
                                        </div>
                                        <div class="single-reservation-author-contents">
                                            <h5 class="single-reservation-author-contents-title"> {{Auth::user()->name}} </h5>
                                            <p class="single-reservation-author-contents-para"> Membre dépuis {{Auth::user()->created_at}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="{{route('dashboard.edit.profil')}}" class="cmn-btn btn-border"> Modifier le profil </a>
                                </div>
                            </div>
                            <div class="single-reservation-item">
                                <div class="single-reservation-contact">
                                    <div class="single-reservation-contact-item">
                                        <span class="single-reservation-contact-list"> <span> <i class="las la-map-marker-alt"></i> </span> {{AUth::user()->adresse }}  </span>
                                    </div>
                                    <div class="single-reservation-contact-item">
                                        <a href="mailto:junembuyi@gmail.com" class="single-reservation-contact-list"> <span> <i class="las la-envelope"></i> </span> {{Auth::user()->email}} </a>
                                    </div>
                                    <div class="single-reservation-contact-item">
                                        <a href="" class="single-reservation-contact-list"> <span> <i class="las la-phone-alt"></i> </span> {{Auth::user()->telephone}} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-reservation bg-white base-padding">
                            <div class="single-reservation-flex">
                                <div class="single-reservation-author">
                                    <div class="single-reservation-author-flex">
                                        <div class="single-reservation-author-contents">
                                            <h5 class="single-reservation-author-contents-title"> Password </h5>
                                            <p class="single-reservation-author-contents-para"> Derniere modification il y'a 4 mois  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="{{route('password.modify')}}" class="cmn-btn btn-border"> Changer de password </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-overlay"></div>
    <div class="popup-fixed">
        <div class="popup-contents popup-cancell-modal">
            <h2 class="popup-contents-title"> Why do you want to cancel? </h2>
            <div class="popup-contents-select">
                <label class="popup-contents-select-label"> Choose a reason </label>
                <div class="js-select">
                    <select>
                        <option value="1">Don't want to Book</option>
                        <option value="2">Booked Accidentally</option>
                        <option value="3">Don't want to Book</option>
                    </select>
                </div>
            </div>
            <div class="popup-contents-btn flex-btn">
                <a href="javascript:void(0)" class="dash-btn popup-close"> <i class="las la-arrow-left"></i> Go Back </a>
                <a href="javascript:void(0)" class="dash-btn btn-cancelled popup-close"> Cancel </a>
            </div>
        </div>
    </div>


    <footer class="footer-area footer-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-wrapper">
                        <div class="footer-wrapper-flex">
                            <div class="footer-wrapper-single">
                                <div class="footer-widget widget">
                                    <div class="footer-widget-contents">
                                        <div class="footer-widget-logo">
                                            <h3 style="color:white;">KEVIN Hotel </h3>
                                        </div>
                                        <div class="footer-widget-inner mt-4">
                                            <p class="footer-widget-contents-para"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit. </p>
                                            <div class="copyright-contents-items mt-5">
                                                <div class="copyright-contents-single">
                                                    <div class="copyright-contents-single-flex">
                                                        <div class="copyright-contents-single-icon">
                                                            <i class="las la-phone"></i>
                                                        </div>
                                                        <div class="copyright-contents-single-details">
                                                            <span class="copyright-contents-single-details-title"> Une question question? </span>
                                                            <a href="tel:3104372766" class="copyright-contents-single-details-link"> +243 995 084 105 </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="copyright-contents-single">
                                                    <div class="copyright-contents-single-flex">
                                                        <div class="copyright-contents-single-icon">
                                                            <i class="las la-envelope"></i>
                                                        </div>
                                                        <div class="copyright-contents-single-details">
                                                            <span class="copyright-contents-single-details-title"> une question? </span>
                                                            <a href="" class="copyright-contents-single-details-link">infos@kevinhotel.com </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-wrapper-single">
                                <div class="footer-widget widget">
                                    <h3 class="footer-widget-title text-white"> Newsletters </h3>
                                    <div class="footer-widget-inner mt-4">
                                        <p class="footer-widget-para"> Soyez le premier a etre informé de nos offres et réduction ! </p>
                                        <div class="footer-widget-form mt-5">
                                            <form action="#">
                                                <div class="footer-widget-form-single">
                                                    <input class="footer-widget-form-control" type="text" placeholder="Votre  Email">
                                                    <button type="submit"> Envoyer  </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
