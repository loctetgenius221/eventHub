<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evennement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description', 'date', 'lieu', 'image', 'date_limite', 'nombre_de_place', 'duree', 'association_id'
    ];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'evenement_id');
    }
}
