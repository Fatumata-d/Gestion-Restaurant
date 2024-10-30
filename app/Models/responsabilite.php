<?php

namespace App\Models;

use App\Models\personnel_restaurant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responsabilite extends Model
{
    protected $guarded = ["id"];

    public function personnel_restaurant()
    {
        return $this->hasMany(personnel_restaurant::class, 'Responsabilité');
    }

}
