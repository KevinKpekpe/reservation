@extends('frontend.base')
@section('content')
<section class="Checkout-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="checkout-wrapper">
                        <div class="checkout-single bg-white radius-10">
                            <h4 class="checkout-title"> Informations personelle  </h4>
                            <div class="checkout-contents mt-3">
                                <div class="checkout-form custom-form">
                                    <form action="#">
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Nom  </label>
                                                <input class="form--control" type="text" name="name" placeholder="Nom ">
                                            </div>
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Post nom  </label>
                                                <input class="form--control" type="text" name="name" placeholder="Post-nom ">
                                            </div>
                                        </div>
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Téléphone  </label>
                                                <input class="form--control" id="phone" type="tel" placeholder="Téléphone">
                                            </div>
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Email Address </label>
                                                <input class="form--control" type="text" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title"> Address </label>
                                                <input class="form--control" type="text" name="address" placeholder="Address">
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-single bg-white radius-10">
                            <h4 class="checkout-title"> Paiement  </h4>
                            <div class="checkout-contents mt-4">
                                <div class="custom-radio custom-radio-inline">
                                    <div class="custom-radio-single active">
                                        <input class="radio-input" type="radio" id="radio1" name="size" checked="checked">
                                        <label for="radio1"> <img src="assets/img/icons/card.svg" alt="card"> Credit/Dabit Card</label>
                                    </div>
                                </div>
                                <div class="checkout-form custom-form">
                                    <form action="#">
                                        <div class="single-input mt-4">
                                            <label class="label-title"> Numéro de carte </label>
                                            <input class="form--control input-padding-left" type="text" name="name" placeholder="Numéro de carte ">
                                            <div class="input-icon"> <img src="assets/img/icons/card.svg" alt="Icon"> </div>
                                        </div>
                                        <div class="input-flex-item">
                                            <div class="single-input mt-4">
                                                <label class="label-title">Date d'éxpiration  </label>
                                                <input class="form--control input-padding-left date-picker" placeholder="Selectionnez une date">
                                                <div class="input-icon"> <img src="assets/img/icons/calendar.svg" alt="Icon"> </div>
                                            </div>
                                            <div class="single-input mt-4">
                                                <label class="label-title"> CVV/CVC </label>
                                                <input class="form--control input-padding-left" type="number" name="name" placeholder="CVV/CVC">
                                                <div class="input-icon"> <img src="assets/img/icons/cvc.svg" alt="Icon"> </div>
                                            </div>
                                        </div>
                                        <div class="lock-contents mt-4">
                                            <div class="lock-contents-icon">
                                                <img src="assets/img/icons/lock.svg" alt="Icon">
                                            </div>
                                            <span class="lock-contents-para"> Les infos de paiement sont crypté par  256 bit SSL </span>
                                        </div>
                                        <div class="guaranty-cancellation radius-10 mt-4">
                                            <h4 class="guaranty-cancellation-title"> Satisfait ou annulation  </h4>
                                            <p class="guaranty-cancellation-para"> annulation possible 12h apres la réservation . </p>
                                        </div>
                                        <div class="btn-wrapper mt-4">
                                            <a href="" class="cmn-btn btn-bg-1 btn-small"> Payer & Confirmer </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sticky-top">
                        <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                            <div class="checkout-sidebar">
                                <h4 class="checkout-sidebar-title"> Détails de la réservation  </h4>
                                <div class="checkout-sidebar-contents">
                                    <ul class="checkout-flex-list list-style-none checkout-border-top pt-3 mt-3">
                                        <li class="list"> <span class="regular"> Data d'arrivé </span> <span class="strong"> 03 Jun 2022 </span> </li>
                                        <li class="list"> <span class="regular"> Date de sortie  </span> <span class="strong"> 06 Jun 2022 </span> </li>
                                        <li class="list"> <span class="regular"> Numéro de la chambre  </span> <span class="strong"> 03 </span> </li>
                                        <li class="list"> <span class="regular"> Nombre de jour  </span> <span class="strong"> 3 Nights, 2 Days </span> </li>
                                        <li class="list"> <span class="regular"> Numbre de personne  </span> <span class="strong"> 5 Person </span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="checkout-widget checkout-widget-padding widget bg-white radius-10">
                            <div class="checkout-car-shape">
                                <img src="assets/img/single-page/car-shape.svg" alt="shapes">
                            </div>
                            <div class="checkout-sidebar">
                                <div class="checkout-sidebar-contents">
                                    <div class="checkout-car center-text">
                                        <div class="checkout-car-thumb">
                                            <img src="assets/img/single-page/car.png" alt="img">
                                        </div>
                                        <div class="checkout-car-contents mt-4">
                                            <h4 class="checkout-car-contents-title"> Bésoin d'un véhicule ? </h4>
                                            <p class="checkout-car-contents-para mt-3"> Réservez un vehicul qui viendra vous récuperer de l'aéroport a l'hotel </p>
                                            <div class="btn-wrapper mt-4">
                                                <a href="javascript:void(0)" class="cmn-btn btn-bg-1"> Réserver </a>
                                            </div>
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
@endsection
