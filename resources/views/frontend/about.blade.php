@extends('frontend.base')
@section('content')
@include('frontend.layouts.breadcrumb-area')

    <section class="about-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> A porpos de KEVIN hotel  </h2>
                <div class="section-title-line"> </div>

            </div>
        </div>
    </section>

    <section class="history-area pat-50 pab-50">
        <div class="container">
            <div class="section-title-three text-left append-flex">
                <h2 class="title"> Nous avons une histoire  </h2>
                <div class="append-history"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="history-wrapper">
                        <div class="global-slick-init history-slider nav-style-one slider-inner-margin" data-appendArrows=".append-history" data-infinite="true" data-arrows="true" data-dots="false" data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                            data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>' data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                            <div class="history-wrapper-item">
                                <div class="single-history center-text">
                                    <div class="single-history-inner">
                                        <h3 class="single-history-year"> <span class="single-history-year-title"> 1982 </span> </h3>
                                        <div class="single-history-thumb">
                                            <a href="assets/img/single-page/about1.jpg" class="gallery-popup"> <img src="assets/img/single-page/about1.jpg" alt="img"> </a>
                                        </div>
                                        <div class="single-history-contents">
                                            <h4 class="single-history-contents-title"> <a href="hotel_detail.html"> KEVIN Hotel </a> </h4>
                                            <p class="single-history-contents-para"> 7eme rue limete/kinshasa , RD Congo </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="history-wrapper-item">
                                <div class="single-history center-text">
                                    <div class="single-history-inner">
                                        <h3 class="single-history-year"> <span class="single-history-year-title"> 1928 </span> </h3>
                                        <div class="single-history-thumb">
                                            <a href="assets/img/single-page/about2.jpg" class="gallery-popup"> <img src="assets/img/single-page/about2.jpg" alt="img"> </a>
                                        </div>
                                        <div class="single-history-contents">
                                            <h4 class="single-history-contents-title"> <a href="hotel_detail.html"> KEVIN Hotel </a> </h4>
                                            <p class="single-history-contents-para"> 84b Ngiri ngiri / kinshasa, RD Congo </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="history-wrapper-item">
                                <div class="single-history center-text">
                                    <div class="single-history-inner">
                                        <h3 class="single-history-year"> <span class="single-history-year-title"> 2021 </span> </h3>
                                        <div class="single-history-thumb">
                                            <a href="assets/img/single-page/about3.jpg" class="gallery-popup"> <img src="assets/img/single-page/about3.jpg" alt="img"> </a>
                                        </div>
                                        <div class="single-history-contents">
                                            <h4 class="single-history-contents-title"> <a href="hotel_detail.html"> KEVIN Hotel </a> </h4>
                                            <p class="single-history-contents-para"> 12 Rue de sapeur/ paris, France </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="history-wrapper-item">
                                <div class="single-history center-text">
                                    <div class="single-history-inner">
                                        <h3 class="single-history-year"> <span class="single-history-year-title"> 1928 </span> </h3>
                                        <div class="single-history-thumb">
                                            <a href="assets/img/single-page/about2.jpg" class="gallery-popup"> <img src="assets/img/single-page/about2.jpg" alt="img"> </a>
                                        </div>
                                        <div class="single-history-contents">
                                            <h4 class="single-history-contents-title"> <a href="hotel_detail.html"> KEVIN Hotel </a> </h4>
                                            <p class="single-history-contents-para"> 4A stanford, Florida </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="history-wrapper-item">
                                <div class="single-history center-text">
                                    <div class="single-history-inner">
                                        <h3 class="single-history-year"> <span class="single-history-year-title"> 2021 </span> </h3>
                                        <div class="single-history-thumb">
                                            <a href="assets/img/single-page/about3.jpg" class="gallery-popup"> <img src="assets/img/single-page/about3.jpg" alt="img"> </a>
                                        </div>
                                        <div class="single-history-contents">
                                            <h4 class="single-history-contents-title"> <a href="hotel_detail.html"> KEVIN Hotel </a> </h4>
                                            <p class="single-history-contents-para"> F25 coup du marteau , Cote d'ivoire </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-area pat-50 pab-100">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Nos partrénaires  </h2>
                <div class="section-title-line"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider slider-inner-margin" data-slidesToShow="6" data-infinite="true" data-arrows="false" data-dots="false" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500" data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>'
                        data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 5}},{"breakpoint": 1200,"settings": {"slidesToShow": 4}},{"breakpoint": 992,"settings": {"slidesToShow": 3}},{"breakpoint": 576, "settings": {"slidesToShow": 2} }]'>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo1.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo2.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo3.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo4.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo5.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo6.png" alt="brandLogo">
                            </a>
                        </div>
                        <div class="single-brand">
                            <a href="javascript:void(0)" class="single-brand-thumb">
                                <img src="assets/img/single-page/logo3.png" alt="brandLogo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
