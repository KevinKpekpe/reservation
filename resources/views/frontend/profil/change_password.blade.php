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
                            <h3 class="single-reservation-title"> Modifier mon  Password </h3>
                            <div class="custom--form dashboard-form">
                                <form action="{{ route('password.change') }}" method="POST">
                                    @csrf
                                    <div class="dashboard-input mt-4">
                                        <label class="label-title"> Current Password </label>
                                        <input type="password" name="current_password" class="form--control" placeholder="Current Password">
                                        <div class="toggle-password"> <span class="eye-icon"> </span> </div>
                                    </div>
                                    <div class="dashboard-input mt-4">
                                        <label class="label-title"> New Password </label>
                                        <input type="password" name="new_password" class="form--control" placeholder="New Password">
                                        <div class="toggle-password"> <span class="eye-icon"> </span> </div>
                                    </div>
                                    <div class="dashboard-input mt-4">
                                        <label class="label-title"> Confirm Password </label>
                                        <input type="password" name="new_password_confirmation" class="form--control" placeholder="Confirm Password">
                                        <div class="toggle-password"> <span class="eye-icon"> </span> </div>
                                    </div>
                                    <div class="btn-wrapper mt-4">
                                        <button type="submit" class="cmn-btn btn-bg-1"> Save Changes </button>
                                    </div>
                                </form>

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
