<?php

namespace App\Models;

use App\Models\commande;
use App\Models\reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class gestionnaire_systeme extends Model
{
    protected $fillable = ['Nom', 'Prenom', 'Téléphone', 'Email', 'Adresse'];

    public function commande()
    {
        return $this->hasMany(commande::class, 'Destinataire');
    }

    public function reservation()
    {
        return $this->hasMany(reservation::class, 'Destinataire');
    }
}
