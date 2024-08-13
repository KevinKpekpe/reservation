@component('mail::message')
# Réservation Confirmée

Bonjour {{ $reservation->user->username }},

Votre réservation pour la chambre **{{ $reservation->room->code }}** a été confirmée. Voici les détails :

- **Date d'arrivée** : {{ $reservation->date_arrive }}
- **Date de départ** : {{ $reservation->date_depart}}
- **Montant total** : {{ $reservation->amount }} €

Merci pour votre réservation !

@component('mail::button', ['url' => route('reservations.show', $reservation->id)])
Voir ma réservation
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
