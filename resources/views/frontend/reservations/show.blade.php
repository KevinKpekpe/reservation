@extends('frontend.base')

@section('content')
    @php
        use Carbon\Carbon;

        $dateArrive = Carbon::parse($reservation->date_arrive);
        $dateDepart = Carbon::parse($reservation->date_depart);
    @endphp

    <section class="reservation-details-area section-bg-2 pat-100 pab-100">
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

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="reservation-details-wrapper bg-white radius-10">
                        <h3 class="title">Détails de la réservation</h3>
                        <div class="reservation-details-inner">
                            <div class="single-reservation-details">
                                <div class="details-title">Numéro de réservation</div>
                                <div class="details-info">#{{ $reservation->id }}</div>
                            </div>
                            <div class="single-reservation-details">
                                <div class="details-title">Statut</div>
                                <div class="details-info">{{ $reservation->status }}</div>
                            </div>
                            <div class="single-reservation-details">
                                <div class="details-title">Chambre</div>
                                <div class="details-info">{{ $reservation->room->numero_chambre }}</div>
                            </div>
                            <div class="single-reservation-details">
                                <div class="details-title">Date d'arrivée</div>
                                <div class="details-info">{{ $reservation->date_arrive }}</div>
                            </div>
                            <div class="single-reservation-details">
                                <div class="details-title">Date de départ</div>
                                <div class="details-info">{{ $reservation->date_depart }}</div>
                            </div>
                            <div class="single-reservation-details">
                                <div class="details-title">Durée du séjour</div>
                                <div class="details-info">{{ $dateArrive->diffInDays($dateDepart) }} nuits</div>
                            </div>
                            <div class="single-reservation-details">
                                <div class="details-title">Montant total</div>
                                <div class="details-info">{{ number_format($reservation->amount, 2) }} €</div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-wrapper mt-4 text-center">
                        <a href="{{ route('payment.checkout', $reservation) }}" class="btn btn-primary">Payer maintenant</a>
                        <a href="{{ route('home') }}" class="cmn-btn btn-bg-1">Retour à l'accueil</a>
                        @if ($reservation->status == 'En attente')
                            <form action="{{ route('reservations.cancel', $reservation->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cmn-btn btn-bg-2"
                                    onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')">Annuler
                                    la réservation</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
