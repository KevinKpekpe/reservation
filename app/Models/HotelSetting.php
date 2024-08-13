<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'check_in_time',
        'check_out_time',
        'breakfast_included',
        'free_wifi',
        'cancellation_policy_hours',
    ];

    protected $casts = [
        'breakfast_included' => 'boolean',
        'free_wifi' => 'boolean',
    ];
}
