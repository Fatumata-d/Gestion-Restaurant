<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\responsabilite;

class ResponsabiliteController extends Controller
{
    public function responsabilite()
    {
        return view('Creerresponsabilite');
    }

    public function creerresponsabilite(Request $request)
    {
        $request->validate([
            'Nom_Responsabilité' => 'required|string|max:60',
        ]);

        $responsabilite = responsabilite ::create([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            'Responsabilité' => $request->input('Responsabilité'),
            'Téléphone' => $request->input('Téléphone'),
            'Email' => $request->input('Email'),
            'Adresse' => $request->input('Adresse'),
        ]);
    

        Session::put('responsabilite_id', $responsabilite->id);
    
        return redirect()->route('Responsabilite');
    
    }

    public function listeResponsabilite()
    {
        $responsabilites = responsabilite::all(); 

        return view('Responsabilite', compact('responsabilites'));
    }
}
