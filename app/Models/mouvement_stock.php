<?php

namespace App\Models;

use App\Models\ingredients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mouvement_stock extends Model
{
    protected $guarded = ["id"];

    public function ingredients()
    {
        return $this->belongsTo(ingredients::class, 'Ingredients');
    }
}
