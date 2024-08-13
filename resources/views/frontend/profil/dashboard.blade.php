@extends('frontend.base')
@section('content')
@include('frontend.layouts.breadcrumb-area')
    <div class="body-overlay"></div>
    <div class="dashboard-area section-bg-2 dashboard-padding">
        <div class="container">
                        <!-- Affichage des messages de session -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Affichage des erreurs de validation -->
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <div class="dashboard-left-content">
                    @include('frontend.profil.navigation')
                </div>
                @forelse ( Auth::user()->reservations as $reservation )
                <div class="dashboard-right-contents mt-4 mt-lg-0">
                    <div class="dashboard-reservation">
                        <div class="single-reservation bg-white base-padding show open">
                            <div class="single-reservation-expandIcon"> <i class="las la-angle-down"></i> </div>
                            <div class="single-reservation-head">
                                <div class="single-reservation-flex">
                                    <div class="single-reservation-content">
                                        <h5 class="single-reservation-content-title"> Reservation ID </h5>
                                        <span class="single-reservation-content-id"> #{{$reservation->uniqueReservationId }} </span>
                                    </div>
                                    <div class="single-reservation-btn">
                                        @if ($reservation->status == "Confirmé")
                                        <a href="javascript:void(0)" class="dash-btn btn-completed"> Confirmé  </a>
                                        @endif
                                        @if ($reservation->status == "En attente")
                                        <a href="javascript:void(0)" class="dash-btn btn-pending"> En attente  </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="single-reservation-inner">
                                <div class="single-reservation-item">
                                    <div class="single-reservation-name">
                                        <h5 class="single-reservation-name-title"> {{Auth::user()->name}} :: {{$reservation->id }} </h5>
                                        <p class="single-reservation-name-para"> {{Auth::user()->telephone}}  </p>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-details">
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Date d'arrivé  </span>
                                            <h5 class="single-reservation-details-title"> {{$reservation->date_arrive}}  </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Date de sortie  </span>
                                            <h5 class="single-reservation-details-title"> {{$reservation->date_depart }}  </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Chambre  </span>
                                            <h5 class="single-reservation-details-title"> {{$reservation->room->code }}  </h5>
                                        </div>
                                        <div class="single-reservation-details-item">
                                            <span class="single-reservation-details-subtitle"> Date de réservation  </span>
                                            <h5 class="single-reservation-details-title"> {{$reservation->created_at }}  </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-flex">
                                        <div class="single-reservation-content">
                                            <h5 class="single-reservation-content-title"> Prix  </h5>
                                            <span class="single-reservation-content-price"> {{$reservation->amount }}$  </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-reservation-item">
                                    <div class="single-reservation-flex">
                                        @if ($reservation->status == "En attente")
                                        <div class="single-reservation-name">
                                            <h5 class="single-reservation-name-title"><a href="{{ route('payment.checkout', $reservation) }}" class="btn btn-primary">Payer maintenant</a></h5>
                                        </div>
                                        @endif
                                        <div class="single-reservation-btn">
                                            @if($reservation->status == 'En attente')
                                            <form action="{{ route('reservations.cancel', $reservation->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dash-btn popup-click" onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')"><i class="las la-exclamation-circle"></i> Annuler ?</button>
                                            </form>
                                        @endif
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
                                <a href="javascript:void(0)" class="pagination-list-item-button"> Prev </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 1 </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 2 </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 3 </a>
                            </li>
                            <li class="pagination-list-item">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 4 </a>
                            </li>
                            <li class="pagination-list-item active">
                                <a href="javascript:void(0)" class="pagination-list-item-link"> 5 </a>
                            </li>
                            <li class="pagination-list-item-next">
                                <a href="javascript:void(0)" class="pagination-list-item-button"> Next </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup-overlay"></div>
    <div class="popup-fixed">
        <div class="popup-contents popup-cancell-modal">
            <h2 class="popup-contents-title"> Pourquoi annulez-vous ? </h2>
            <div class="popup-contents-select">
                <label class="popup-contents-select-label"> Choisissez la raison  </label>
                <div class="js-select">
                    <select>
                        <option value="1">Plus besoin </option>
                        <option value="2">Réservation accidentelle</option>
                        <option value="3">Changement d'avis </option>
                    </select>
                </div>
            </div>
            <div class="popup-contents-btn flex-btn">
                <a href="javascript:void(0)" class="dash-btn popup-close"> <i class="las la-arrow-left"></i> Retour </a>
                <a href="javascript:void(0)" class="dash-btn btn-cancelled popup-close"> Annuler </a>
            </div>
        </div>
    </div>
@endsection
