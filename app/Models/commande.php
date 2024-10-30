<?php

namespace App\Models;

use App\Models\plat;
use App\Models\client;
use App\Models\gestionnaire_systeme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commande extends Model
{
    protected $fillable = ['Correspondance', 'Quantité', 'Date_commande', 'Destinataire', 'created_at'];

    public function client()
    {
        return $this->belongsTo(client::class, 'Correspondance');
    }

    public function gestionnaire_systeme()
    {
        return $this->belongsTo(gestionnaire_systeme::class, 'Destinataire', 'id');
    }

    public function plat()
    {
        return $this->belongsToMany(plat::class, 'commande-plat','Commandé','Plat')
            ->withPivot('Quantité')
            ->withTimestamps();

    }


}
