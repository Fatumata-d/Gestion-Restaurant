<?php

namespace App\Models;

use App\Models\menu;
use App\Models\plat;
use App\Models\personnel_restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class menu extends Model
{
    protected $guarded = ["id"];

    public function personnel_restaurant()
    {
        return $this->belongsTo(personnel_restaurant::class, 'Createur');
    }

    public function plat()
    {
        return $this->belongsToMany(plat::class, 'menu_plat','Menu','Plat');
    }
}
