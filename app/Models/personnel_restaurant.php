<?php

namespace App\Models;

use App\Models\menu;
use App\Models\responsabilite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class personnel_restaurant extends Model
{
    protected $guarded = ["id"];

    public function responsabilite()
    {
        return $this->belongsTo(responsabilite::class, 'Responsabilité');
    }

    public function menu()
    {
        return $this->hasMany(menu::class, 'Createur');
    }
}
