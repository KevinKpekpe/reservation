<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id', 'stripe_payement_id', 'currency',
        'amount', 'payment_status'
    ];
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    public function paiement()
{
    return $this->hasOne(Paiement::class);
}
}
