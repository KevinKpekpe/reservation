<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    /**
     * Crée une session de paiement Stripe et redirige l'utilisateur vers la page de paiement.
     *
     * @param Reservation $reservation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createCheckoutSession(Reservation $reservation)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $reservation->amount * 100,
                    'product_data' => [
                        'name' => 'Réservation #' . $reservation->id,
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', ['reservation' => $reservation->id]) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment.cancel', ['reservation' => $reservation->id]),
            'client_reference_id' => $reservation->id,
        ]);

        return redirect($session->url);
    }

    /**
     * Gère le succès du paiement et enregistre les détails dans la base de données.
     *
     * @param Request $request
     * @param Reservation $reservation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function success(Request $request, Reservation $reservation)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $sessionId = $request->query('session_id');


        if (!$sessionId) {
            return redirect()->route('dashboard', $reservation->id)
                ->with('error', 'ID de session manquant. Impossible de vérifier le paiement.');
        }
        try {
            $session = Session::retrieve($sessionId);

            if ($session->payment_status === 'paid') {
                DB::beginTransaction();

                // Enregistrement du paiement
                $paiement = new Paiement();
                $paiement->reservation_id = $reservation->id;
                $paiement->stripe_payement_id = $session->payment_intent;
                $paiement->currency = $session->currency;
                $paiement->amount = $session->amount_total / 100;
                $paiement->payment_status = $session->payment_status;
                $paiement->save();

                // Mise à jour du statut de la réservation
                $reservation->status = 'Confirmé';
                $reservation->save();

                DB::commit();

                // Mise à jour du statut de la chambre si nécessaire
                // $reservation->room->update(['status' => 'occupée']);

                return redirect()->route('dashboard')->with('success', 'Paiement réussi et réservation confirmée !');
            } else {
                return redirect()->route('dashboard')->with('error', 'Le paiement n\'a pas été complété. Veuillez réessayer.');
            }
        } catch (\Stripe\Exception\ApiErrorException $e) {
            return redirect()->route('dashboard')
                ->with('error', 'Erreur lors de la vérification du paiement : ' . $e->getMessage());
        }
    }

    /**
     * Gère l'annulation du paiement.
     *
     * @param Reservation $reservation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cancel(Reservation $reservation)
    {
        return redirect()->route('dashboard')->with('error', 'Le paiement a été annulé.');
    }
}
