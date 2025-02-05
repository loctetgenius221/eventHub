<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'evenement_id', 'user_id', 'statut'
    ];

    public function evennement()
    {
        return $this->belongsTo(Evennement::class, 'evenement_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
