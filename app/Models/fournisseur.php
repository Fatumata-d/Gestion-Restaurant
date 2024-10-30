<?php

namespace App\Models;

use App\Models\ingredients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class fournisseur extends Model
{
    protected $fillable = ['Nom', 'Prenom', 'Téléphone', 'Email', 'Adresse'];

    public function ingredients()
    {
        return $this->belongsToMany(ingredients::class, 'fournisseur-ingredients','Fournisseur','Produits');
    }
}
