<?php

namespace App\Models;

use App\Models\commande;
use App\Models\reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class client extends Model
{
    protected $fillable = ['Nom', 'Prenom', 'Téléphone', 'Email', 'Adresse', 'created_at'];

    public function commande()
    {
        return $this->hasMany(commande::class, 'Correspondance');
    }

    public function reservation()
    {
        return $this->hasMany(reservation::class, 'Correspondance');
    }
}
