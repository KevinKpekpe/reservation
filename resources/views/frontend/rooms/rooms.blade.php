@extends('frontend.base')
@section('content')
@include('frontend.layouts.breadcrumb-area')
<section class="hotel-list-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="shop-contents-wrapper mt-5">
                <div class="shop-icon">
                    <div class="shop-icon-sidebar">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <div class="shop-grid-contents">
                    <div class="grid-list-contents">
                        <div class="grid-list-contents-flex">
                            <div class="grid-list-view">
                                <ul class="grid-list-view-flex d-flex tabs list-style-none">
                                    <li class="grid-list-view-icons active" data-tab="tab-grid">
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-border-all"></i> </a>
                                    </li>
                                    <li class="grid-list-view-icons" data-tab="tab-list">
                                        <a href="javascript:void(0)" class="icon"> <i class="las la-bars"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="tab-grid" class="tab-content-item active mt-4">
                        <div class="row gy-4">
                            @foreach ($rooms as $room )
                                <div class="col-md-6">
                                <div class="hotel-view bg-white radius-20">
                                    @if ($room->firstPicture())
                                    <img src="{{ asset('storage/' . $room->firstPicture()->image) }}" class="d-block w-100" alt="" srcset="">
                                    @endif
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span class="hotel-view-contents-review-count"> (380) </span> </span>
                                            <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> {{$room->title}}  </a> </h3>

                                        </div>
                                        <div class="hotel-view-contents-middle">
                                            <div class="hotel-view-contents-flex">
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Car Parking">
                                                    <i class="las la-parking"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Wifi">
                                                    <i class="las la-wifi"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Free Breakfast">
                                                    <i class="las la-coffee"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Home Service">
                                                    <i class="las la-quidditch"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Swimming Pool">
                                                    <i class="las la-swimming-pool"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Reception">
                                                    <i class="las la-receipt"></i>
                                                </div>
                                                <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Gym">
                                                    <i class="las la-dumbbell"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="hotel-view-contents-bottom">
                                            <div class="hotel-view-contents-bottom-flex">
                                                <div class="hotel-view-contents-bottom-contents">
                                                    <h4 class="hotel-view-contents-bottom-title"> {{$room->prix}} <sub>/Nuit</sub> </h4>
                                                </div>
                                                <div class="btn-wrapper">
                                                    <a href="{{route('rooms.show',$room->id)}}" class="cmn-btn btn-bg-1 btn-small"> Plus de détail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="pagination-wrapper">
                                    <ul class="pagination-list list-style-none">
                                        <li class="pagination-list-item-prev">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Prec</a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
                                        </li>
                                        <li class="pagination-list-item active">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
                                        </li>
                                        <li class="pagination-list-item-next">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Suivant </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-list" class="tab-content-item mt-4">
                        <div class="row gy-4">
                            @forelse ($rooms as $room )
                                <div class="col-12">
                                <div class="hotel-view bg-white radius-20">
                                    <div class="hotel-view-flex">
                                        <a href="{{route('rooms.show',$room->id)}}" class="hotel-view-thumb hotel-view-list-thumb bg-image" style="background-image: url({{ asset('storage/' . $room->firstPicture()->image) }});">
                                        </a>
                                        <div class="hotel-view-contents">
                                            <div class="hotel-view-contents-header">
                                                <div class="hotel-view-contents-header-flex d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                                    <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span class="hotel-view-contents-review-count"> (380) </span> </span>
                                                    <div class="btn-wrapper">
                                                        <a href="{{route('rooms.show',$room->id)}}" class="cmn-btn btn-bg-1 btn-small"> Plus de détail </a>
                                                    </div>
                                                </div>
                                                <h3 class="hotel-view-contents-title"> <a href="{{route('rooms.show',$room->id)}}">{{$room->title}}</a> </h3>

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
                                                        <p class="hotel-view-contents-icon-title flex-fill"> petit-dejeuner </p>
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
                                                    <div class="hotel-view-contents-bottom-contents d-flex flex-wrap gap-4 gap-sm-1">
                                                        <h4 class="hotel-view-contents-bottom-title"> ${{$room->prix}} <sub>/Nuit</sub> </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty

                            @endforelse
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <div class="pagination-wrapper">
                                    <ul class="pagination-list list-style-none">
                                        <li class="pagination-list-item-prev">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Prec </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
                                        </li>
                                        <li class="pagination-list-item active">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
                                        </li>
                                        <li class="pagination-list-item">
                                            <a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
                                        </li>
                                        <li class="pagination-list-item-next">
                                            <a href="javascript:void(0)" class="pagination-list-item-button"> Suivant </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
