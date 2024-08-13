@extends('frontend.base')
@section('content')
        <div class="banner-area banner-area-one">
        <div class="container-fluid p-0">
            <div class="row align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6">
                    <div class="banner-single banner-single-one percent-padding">
                        <div class="banner-single-content">
                            <h2 class="banner-single-content-title fw-700"> Vivez des moments incroyable avec vos proches. </h2>
                            <p class="banner-single-content-para mt-3"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-image banner-right-bg radius-20" style="background-image: url(assets/img/banner/banner.jpg);"></div>
            </div>
        </div>
    </div>

    <section class="booking-area pat-100 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Pourquoi nous ? </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row gy-4 mt-5">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="assets/img/icons/b1.svg" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Réservation facile  </a> </h4>
                            <p class="single-why-contents-para mt-3"> Text a remplacer en cas d'inspiration. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow zoomIn" data-wow-delay=".4s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="assets/img/icons/b2.svg" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> 28K Reviews </a> </h4>
                            <p class="single-why-contents-para mt-3"> Text a remplacer en cas d'inspiration. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="assets/img/icons/b3.svg" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> Annulation gratuite  </a> </h4>
                            <p class="single-why-contents-para mt-3"> Text a remplacer en cas d'inspiration. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay=".2s">
                    <div class="single-why center-text bg-white single-why-border radius-10">
                        <div class="single-why-icon">
                            <img src="assets/img/icons/b4.svg" alt="icon">
                        </div>
                        <div class="single-why-contents mt-3">
                            <h4 class="single-why-contents-title"> <a href="javascript:void(0)"> 24/7 Support </a> </h4>
                            <p class="single-why-contents-para mt-3"> Text a remplacer en cas d'inspiration. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="attraction-area pat-50 pab-50">
        <div class="container">
            <div class="section-title text-left append-flex">
                <h2 class="title"> Nos differents emplacement </h2>
                <div class="append-attraction"></div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="global-slick-init attraction-slider nav-style-one slider-inner-margin" data-appendArrows=".append-attraction" data-infinite="true" data-arrows="true" data-dots="false" data-slidesToShow="4" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500"
                        data-prevArrow='<div class="prev-icon"><i class="las la-angle-left"></i></div>' data-nextArrow='<div class="next-icon"><i class="las la-angle-right"></i></div>' data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 4}},{"breakpoint": 1200,"settings": {"slidesToShow": 3}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 480, "settings": {"slidesToShow": 1} }]'>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="about.html"> <img src="assets/img/attraction/a1.jpg" alt="img"> </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="about.html"> Kevin hotel </a> </h4>
                                    <p class="single-attraction-contents-para"> Text a remplacer en cas d'inspiration  </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="about.html"> <img src="assets/img/attraction/a2.jpg" alt="img"> </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="about.html"> Kevin hotel </a> </h4>
                                    <p class="single-attraction-contents-para"> Text a remplacer en cas d'inspiration  </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="about.html"> <img src="assets/img/attraction/a3.jpg" alt="img"> </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="about.html"> Kevin hotel  </a> </h4>
                                    <p class="single-attraction-contents-para"> Text a remplacer en cas d'inspiration  </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="about.html"> <img src="assets/img/attraction/a4.jpg" alt="img"> </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="about.html"> Kevin hotel </a> </h4>
                                    <p class="single-attraction-contents-para"> Text a remplacer en cas d'inspiration  </p>
                                </div>
                            </div>
                        </div>
                        <div class="attraction-item">
                            <div class="single-attraction radius-20">
                                <div class="single-attraction-thumb">
                                    <a href="about.html"> <img src="assets/img/attraction/a2.jpg" alt="img"> </a>
                                </div>
                                <div class="single-attraction-contents">
                                    <h4 class="single-attraction-contents-title"> <a href="about.html"> Kevin hotel </a> </h4>
                                    <p class="single-attraction-contents-para"> Text a remplacer en cas d'inspiration  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="guest-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> ce que pense nos clients </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="custom-tab guest-wrapper mt-5">
                <div class="guest-wrapper-shapes">
                    <img src="assets/img/guest/guest-shape.png" alt="">
                </div>
                <div class="custom-tab-menu">
                    <ul class="tab-menu guest-wrapper-images list-style-none">
                        <li class="guest-wrapper-images-single active">
                            <img src="assets/img/guest/guest2.jpg" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="assets/img/guest/guest2.jpg" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="assets/img/guest/guest2.jpg" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="assets/img/guest/guest2.jpg" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="assets/img/guest/guest2.jpg" alt="">
                        </li>
                        <li class="guest-wrapper-images-single">
                            <img src="assets/img/guest/guest2.jpg" alt="">
                        </li>
                    </ul>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-5 col-lg-6 col-md-8">
                        <div class="tab-area">
                            <div class="single-guest tab-item active center-text">
                                <div class="single-guest-thumb">
                                    <img src="assets/img/guest/guest2.jpg" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Junior MBUYI </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="assets/img/guest/guest2.jpg" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Light JR  </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="assets/img/guest/guest2.jpg" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Kevin KPEKPE </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="assets/img/guest/guest2.jpg" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Harmony MVILA </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="assets/img/guest/guest2.jpg" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> David MUKENDI  </h4>
                                </div>
                            </div>
                            <div class="single-guest tab-item center-text">
                                <div class="single-guest-thumb">
                                    <img src="assets/img/guest/guest2.jpg" alt="">
                                </div>
                                <div class="single-guest-contents mt-4">
                                    <p class="single-guest-contents-para"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. </p>
                                    <h4 class="single-guest-contents-title mt-3"> Gad MOKATA </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shots-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Petit tour des lieux </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="imgLoaded mt-5">
                <div class="row g-4 masonry-grid">
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot1.jpg);">
                            <a href="assets/img/shots/shot1.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para">Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot2.jpg);">
                            <a href="assets/img/shots/shot2.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para"> Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot3.jpg);">
                            <a href="assets/img/shots/shot3.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para"> Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot4.jpg);">
                            <a href="assets/img/shots/shot4.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para"> Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot5.jpg);">
                            <a href="assets/img/shots/shot5.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para"> Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot10.jpg);">
                            <a href="assets/img/shots/shot10.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para"> Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot11.jpg);">
                            <a href="assets/img/shots/shot11.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para"> Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 grid-item">
                        <div class="single-shots bg-image" style="background-image: url(assets/img/shots/shot12.jpg);">
                            <a href="assets/img/shots/shot12.jpg" class="single-shots-icon gallery-popup-two">
                                <i class="las la-image"></i>
                            </a>
                            <div class="single-shots-contents">
                                <h4 class="single-shots-contents-title"> <a href="hotel_details.html"> Kevin hotel </a> </h4>
                                <p class="single-shots-contents-para"> Text a remplacer en cas d'inspiration  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="question-area pat-50 pab-50">
        <div class="container">
            <div class="section-title center-text">
                <h2 class="title"> Questions fréquentes  </h2>
                <div class="section-title-shapes"> </div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="faq-wrapper">
                        <div class="faq-contents">
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    Comment travaillez vous ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item active open wow fadeInLeft" data-wow-delay=".2s">
                                <h3 class="faq-title">
                                   Comment annuler une réservtion ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".3s">
                                <h3 class="faq-title">
                                    Quels sont vos services ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    Ou etes-vous ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                            <div class="faq-item wow fadeInLeft" data-wow-delay=".1s">
                                <h3 class="faq-title">
                                    Quel est l'heure de fermeture ?
                                </h3>
                                <div class="faq-panel">
                                    <p class="faq-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non ipsum purus erat aliquam fermentum, tincidunt. Massa id faucibus orci nunc sed turpis nibh neque. Ut tellus curabitur arcu, mollis malesuada arcu. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="faq-question faq-question-border radius-10 sticky-top">
                        <h3 class="faq-question-title"> Vous avez une question ? </h3>
                        <div class="faq-question-form custom-form mat-20">
                            <form action="#">
                                <div class="single-input">
                                    <label class="label-title"> Nom </label>
                                    <input type="text" class="form--control radius-10" placeholder="nom ">
                                </div>
                                <div class="single-input">
                                    <label class="label-title"> Email </label>
                                    <input type="text" class="form--control radius-10" placeholder="Email">
                                </div>
                                <div class="single-input">
                                    <label class="label-title"> Questions </label>
                                    <textarea name="message" class="form--control form-message radius-10" placeholder="Votre questons..."></textarea>
                                </div>
                                <button class="submit-btn w-100 radius-10" type="submit"> Envoyer  </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="brand-area pat-50 pab-50">
        <div class="container">
            <div class="row">
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
    </div>

    <div class="newsletter-area pat-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-wrapper newsletter-bg radius-20 newsletter-wrapper-padding wow zoomIn" data-wow-delay=".3s">
                        <div class="newsletter-wrapper-shapes">
                            <img src="assets/img/single-page/newsletter-shape1.png" alt="shapes">
                            <img src="assets/img/single-page/newsletter-shape2.png" alt="shapes">
                        </div>
                        <div class="newsletter-contents center-text">
                            <h3 class="newsletter-contents-title"> Souscrivez a la newsletter </h3>
                            <div class="newsletter-contents-form custom-form mt-4">
                                <div class="single-input">
                                    <input type="text" class="form--control" placeholder="Email">
                                    <button type="submit"> Envoyer  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer-area footer-area-one footer-border-round footer-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-wrapper pat-100 pab-100">
                        <div class="footer-contents center-text">
                            <div class="footer-contents-logo">
                                <h3 class="footer-contents-logo-title text-white"> <a href="index.html"> KEVIN  HOTEL </a> </h3>
                                <p class="footer-contents-logo-para mt-3"> Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit exercitation veniam. </p>
                            </div>
                            <div class="footer-widget widget">
                                <div class="footer-widget-social mt-4">
                                    <ul class="footer-widget-social-list list-style-none justify-content-center">
                                        <li class="footer-widget-social-list-item">
                                            <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-facebook-f"></i> </a>
                                        </li>
                                        <li class="footer-widget-social-list-item">
                                            <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-twitter"></i> </a>
                                        </li>
                                        <li class="footer-widget-social-list-item">
                                            <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-instagram"></i> </a>
                                        </li>
                                        <li class="footer-widget-social-list-item">
                                            <a class="footer-widget-social-list-link" href="javascript:void(0)"> <i class="lab la-youtube"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="back-to-top">
        <span class="back-top"> <i class="las la-angle-up"></i> </span>
    </div>


    <div class="mouse-move mouse-outer"></div>
    <div class="mouse-move mouse-inner"></div>

@endsection
