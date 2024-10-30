<?php

namespace App\Models;

use App\Models\menu;
use App\Models\commande;
use App\Models\ingredients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class plat extends Model
{
    protected $guarded = ["id"];

    public function commande()
    {
        return $this->belongsToMany(commande::class, 'commande-plat','Plat','Commandé')
            ->withPivot('Quantité')
            ->withTimestamps();
    }

    public function menu()
    {
        return $this->belongsToMany(menu::class, 'menu_plat','Plat','Menu');
    }

    public function ingredients()
    {
        return $this->belongsToMany(ingredients::class, 'ingredient-plat','Plat','Ingredients');
    }
}
