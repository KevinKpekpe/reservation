@extends('frontend.base')
@section('content')
    @include('frontend.layouts.breadcrumb-area')
    <section class="hotel-details-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-8 col-lg-7">
                    <div class="details-left-wrapper">
                        <div class="details-contents bg-white radius-10">
                            @if ($room->pictures->isNotEmpty())
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
                                    data-bs-interval="2000">
                                    <div class="carousel-inner">
                                        @foreach ($room->pictures as $index => $picture)
                                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                                <img src="{{ asset('storage/' . $picture->image) }}" class="d-block w-100"
                                                    alt="Room Image {{ $index + 1 }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            @else
                                <p>No images available for this room.</p>
                            @endif

                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                    <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span
                                            class="hotel-view-contents-review-count"> (380) </span> </span>
                                    <h3 class="hotel-view-contents-title"> {{ $room->code }} </h3>
                                </div>
                                <div class="hotel-view-contents-middle">
                                    <div class="hotel-view-contents-flex">
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-parking"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Parking </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-wifi"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Wifi </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-coffee"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Petit-déjeuner </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-quidditch"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Room Service </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-swimming-pool"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Pool </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-receipt"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Reception </p>
                                        </div>
                                        <div class="hotel-view-contents-icon d-flex gap-1">
                                            <span> <i class="las la-dumbbell"></i> </span>
                                            <p class="hotel-view-contents-icon-title flex-fill"> Gym </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-view-contents-bottom">
                                    <div class="hotel-view-contents-bottom-flex">
                                        <div class="hotel-view-contents-bottom-contents">
                                            <h4 class="hotel-view-contents-bottom-title">
                                                {{ $room->prix }}<sub>/Nuit</sub> </h4>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Réserver
                                                maintenant </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="details-contents-tab">
                                <ul class="tabs details-tab details-tab-border">
                                    <li class="active" data-tab="about"> À propos </li>
                                    <li data-tab="reviews"> Avis </li>
                                </ul>
                                <div id="about" class="tab-content-item active">
                                    <div class="about-tab-contents">
                                        <p class="about-tab-contents-para">{{ $room->description }} </p>
                                        <ul>
                                            @forelse ($room->options as $option )
                                                <li>{{$option->code}}</li>
                                            @empty

                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                                <div id="reviews" class="tab-content-item">
                                    <div class="review-tab-contents">
                                        <div class="review-tab-contents-single">
                                            <div class="rating-wrap">
                                                <div class="ratings">
                                                    <span class="hide-rating"></span>
                                                    <span class="show-rating"></span>
                                                </div>
                                            </div>
                                            <p class="about-review-para mt-3"> Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed a egestas leo. Aliquam ut ante lobortis tellus cursus
                                                pellentesque. Praesent feugiat tellus quis aliquet </p>
                                            <div class="review-tab-contents-author mt-4">
                                                <h4 class="review-tab-contents-author-name"> Junior MBUYI </h4>
                                                <p class="review-tab-contents-author-para mt-2"> Développeur </p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="review-tab-contents-single">
                                            <div class="rating-wrap">
                                                <div class="ratings">
                                                    <span class="hide-rating"></span>
                                                    <span class="show-rating"></span>
                                                </div>
                                            </div>
                                            <p class="about-review-para mt-3"> Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Sed a egestas leo. Aliquam ut ante lobortis tellus cursus
                                                pellentesque. Praesent feugiat tellus quis aliquet </p>
                                            <div class="review-tab-contents-author mt-4">
                                                <h4 class="review-tab-contents-author-name"> Junior MBUYI </h4>
                                                <p class="review-tab-contents-author-para mt-2"> Développeur </p>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"> Déposer un avis </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sticky-top">
                        <div class="hotel-details-widget hotel-details-widget-padding widget bg-white radius-10">
                            <!-- Affichage des erreurs -->
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="details-sidebar">
                                <form action="{{ route('reservations.store') }}" method="POST" id="reservation-form">
                                    @csrf
                                    <div class="details-sidebar-dropdown custom-form">
                                        <div class="single-input">
                                            <label class="details-sidebar-dropdown-title">Date d'arrivée</label>
                                            <input class="form--control date-picker" type="datetime-local" name="date_arrive" id="date_arrive" required>
                                        </div>
                                        <div class="single-input mt-3">
                                            <label class="details-sidebar-dropdown-title">Date de départ</label>
                                            <input class="form--control date-picker" type="datetime-local" name="date_depart" id="date_depart" required>
                                        </div>
                                    </div>
                                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                                    <input type="hidden" name="amount" value="{{ $room->prix }}">
                                    <div class="btn-wrapper mt-4">
                                        <button type="submit" class="cmn-btn btn-bg-1 btn-small">Créer la réservation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="hotel-details-widget hotel-details-widget-padding widget bg-white radius-10">
                            <div class="details-sidebar">
                                <div class="details-sidebar-offer center-text radius-10">
                                    <div class="details-sidebar-offer-shapes">
                                        <img src="{{ asset('assets/img/single-page/offer_shapes.png') }}" alt="shapes">
                                    </div>
                                    <div class="details-sidebar-offer-thumb">
                                        <img src="{{ asset('assets/img/single-page/offer.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Review -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Déposer un avis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="review-text" class="form-label">Votre avis</label>
                            <textarea class="form-control" id="review-text" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="review-rating" class="form-label">Note</label>
                            <input type="number" class="form-control" id="review-rating" min="1"
                                max="5">
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
