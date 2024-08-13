<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Room;
use App\Notifications\ReservationCreated;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'date_arrive' => 'required|date_format:Y-m-d\TH:i|after_or_equal:today',
            'date_depart' => 'required|date_format:Y-m-d\TH:i|after:date_arrive',
            'room_id' => 'required|exists:rooms,id',
        ]);

        // Récupération de la chambre
        $room = Room::findOrFail($request->room_id);

        // Formatage des dates
        $dateArrive = Carbon::createFromFormat('Y-m-d\TH:i', $request->date_arrive);
        $dateDepart = Carbon::createFromFormat('Y-m-d\TH:i', $request->date_depart);

        // Vérification que la date de départ est postérieure à la date d'arrivée
        if ($dateDepart->lessThanOrEqualTo($dateArrive)) {
            return redirect()->back()->withErrors(['date_depart' => 'La date de départ doit être postérieure à la date d\'arrivée.']);
        }

        // Vérification de la disponibilité de la chambre
        $isAvailable = $this->checkRoomAvailability($room, $dateArrive, $dateDepart);

        if (!$isAvailable) {
            return redirect()->back()->withErrors('La chambre n\'est pas disponible pour les dates sélectionnées.');
        }

        // Calcul du montant total
        $numberOfDays = $dateArrive->diffInDays($dateDepart);
        $totalAmount = $room->prix * $numberOfDays;

        $uniqueReservationId = $this->generateUniqueReservationId();

        // Création de la réservation
        $reservation = new Reservation();
        $reservation->uniqueReservationId = $uniqueReservationId;
        $reservation->date_arrive = $dateArrive;
        $reservation->date_depart = $dateDepart;
        $reservation->amount = $totalAmount;
        $reservation->user_id = Auth::id();
        $reservation->room_id = $request->room_id;
        $reservation->status = 'En attente';
        $reservation->save();

        $reservation->user->notify(new ReservationCreated($reservation));

        return redirect()->route('dashboard');
    }

    private function checkRoomAvailability($room, $dateArrive, $dateDepart)
    {
        $conflictingReservations = Reservation::where('room_id', $room->id)
            ->where(function ($query) use ($dateArrive, $dateDepart) {
                $query->whereBetween('date_arrive', [$dateArrive, $dateDepart])
                    ->orWhereBetween('date_depart', [$dateArrive, $dateDepart])
                    ->orWhere(function ($query) use ($dateArrive, $dateDepart) {
                        $query->where('date_arrive', '<=', $dateArrive)
                            ->where('date_depart', '>=', $dateDepart);
                    });
            })
            ->count();

        return $conflictingReservations === 0;
    }

    private function generateUniqueReservationId()
    {
        do {
            $code = strtoupper(Str::random(8)); 
        } while (Reservation::where('uniqueReservationId', $code)->exists());

        return $code;
    }

    public function show(Reservation $reservation)
    {

        if (Auth::id() !== $reservation->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('frontend.reservations.show', compact('reservation'));
    }

    public function cancel(Reservation $reservation)
    {
        if (Auth::id() !== $reservation->user_id) {
            abort(403, 'Unauthorized action.');
        }

        if ($reservation->status !== 'En attente') {
            return redirect()->back()->with('error', 'Seules les réservations en attente peuvent être annulées.');
        }

        $reservation->delete();

        return redirect()->route('home')->with('success', 'Votre réservation a été annulée avec succès.');
    }
}
