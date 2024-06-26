<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'user_id', 'logo', 'description', 'adresse', 'activite', 'ninea', 'date_creation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function evenements()
    {
        return $this->hasMany(Evennement::class);
    }
}
