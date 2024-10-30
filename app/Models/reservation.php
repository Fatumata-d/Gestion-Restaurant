<?php

namespace App\Models;

use App\Models\client;
use App\Models\emplacement;
use App\Models\gestionnaire_systeme;
use App\Models\type_table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reservation extends Model
{
    protected $guarded = ["id"];
    
    public function client()
    {
        return $this->belongsTo(client::class, 'Correspondance');
    }

    public function gestionnaire_systeme()
    {
        return $this->belongsTo(gestionnaire_systeme::class, 'Destinataire', 'id');
    }

    public function type_table()
    {
        return $this->belongsTo(type_table::class, 'Type_Table');
    }

    public function emplacement()
    {
        return $this->belongsTo(emplacement::class, 'Emplacement_Table');
    }
}
