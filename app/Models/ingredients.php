<?php

namespace App\Models;

use App\Models\plat;
use App\Models\fournisseur;
use App\Models\mouvement_stock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ingredients extends Model
{
    protected $guarded = ["id"];

    public function plat()
    {
        return $this->belongsToMany(plat::class, 'ingredient-plat','Ingredients','Plat');
    }

    public function fournisseur()
    {
        return $this->belongsToMany(fournisseur::class, 'fournisseur-ingredients','Produits','Fournisseur');
    }

    public function mouv_stock()
    {
        return $this->hasMany(mouvement_stock ::class, 'Ingredients');
    }
}
