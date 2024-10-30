<?php

namespace App\Models;

use App\Models\reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class type_table extends Model
{
    protected $guarded = ["id"];

    public function reservation()
    {
        return $this->hasMany(reservation::class, 'Type_Table');
    }
}
