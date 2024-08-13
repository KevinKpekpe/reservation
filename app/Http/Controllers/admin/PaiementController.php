<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Paiement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaiementController extends Controller
{
    public function index(Request $request)
    {
        $query = Paiement::with('reservation');

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function ($q) use ($search) {
                $q->where('stripe_payement_id', 'like', "%$search%")
                  ->orWhere('payment_status', 'like', "%$search%")
                  ->orWhere('amount', 'like', "%$search%")
                  ->orWhereHas('reservation', function ($q) use ($search) {
                      $q->where('code', 'like', "%$search%");
                  });
            });
        }

        $paiements = $query->latest()->paginate(10);

        return view('admin.paiements.index', compact('paiements'));
    }

    public function show(Paiement $paiement)
    {
        return view('admin.paiements.show', compact('paiement'));
    }

    public function create()
    {
        $reservations = Reservation::whereDoesntHave('paiement')->get();
        return view('admin.paiements.form', [
            'paiement' => new Paiement(),
            'reservations' => $reservations
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'stripe_payement_id' => 'required|string|unique:paiements',
            'currency' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'payment_status' => 'required|string',
        ]);

        Paiement::create($validated);

        return redirect()->route('admin.paiements.index')->with('success', 'Paiement créé avec succès.');
    }

    public function edit(Paiement $paiement)
    {
        $reservations = Reservation::all();
        return view('admin.paiements.form', compact('paiement', 'reservations'));
    }

    public function update(Request $request, Paiement $paiement)
    {
        $validated = $request->validate([
            'reservation_id' => 'required|exists:reservations,id',
            'stripe_payement_id' => 'required|string|unique:paiements,stripe_payement_id,' . $paiement->id,
            'currency' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'payment_status' => 'required|string',
        ]);

        $paiement->update($validated);

        return redirect()->route('admin.paiements.index')->with('success', 'Paiement mis à jour avec succès.');
    }

    public function destroy(Paiement $paiement)
    {
        $paiement->delete();
        return redirect()->route('admin.paiements.index')->with('success', 'Paiement supprimé avec succès.');
    }

    public function refund(Paiement $paiement)
    {

        DB::beginTransaction();
        try {
            $paiement->update(['payment_status' => 'refunded']);
            $paiement->reservation->update(['status' => 'cancelled']);
            DB::commit();
            return redirect()->route('admin.paiements.index')->with('success', 'Paiement remboursé avec succès.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.paiements.index')->with('error', 'Erreur lors du remboursement.');
        }
    }

    public function statistics()
    {
        $totalAmount = Paiement::sum('amount');
        $successfulPayments = Paiement::where('payment_status', 'succeeded')->count();
        $failedPayments = Paiement::where('payment_status', 'failed')->count();

        return view('admin.paiements.statistics', compact('totalAmount', 'successfulPayments', 'failedPayments'));
    }
}
