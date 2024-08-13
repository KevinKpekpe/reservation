<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with(['user', 'room'])->latest()->paginate(10);
        return view('admin.reservations.index', compact('reservations'));
    }

    public function show(Reservation $reservation)
    {
        return view('admin.reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('admin.reservations.form', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $validated = $request->validate([
            'date_arrive' => 'required|date',
            'date_depart' => 'required|date|after:date_arrive',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:En attente,Confirmée,Annulée'
        ]);

        $reservation->update($validated);

        return redirect()->route('admin.reservations.index')->with('success', 'Réservation mise à jour avec succès.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('admin.reservations.index')->with('success', 'Réservation supprimée avec succès.');
    }

    public function confirmReservation(Reservation $reservation)
    {
        $reservation->update(['status' => 'Confirmée']);
        return redirect()->route('admin.reservations.index')->with('success', 'Réservation confirmée avec succès.');
    }

    public function cancelReservation(Reservation $reservation)
    {
        $reservation->update(['status' => 'Annulée']);
        return redirect()->route('admin.reservations.index')->with('success', 'Réservation annulée avec succès.');
    }
}
