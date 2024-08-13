<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'code', 'description', 'prix', 'numero_chambre',
        'nombre_de_personne', 'category_id', 'status'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }
    public function firstPicture()
    {
        return $this->pictures()->first();
    }
}
