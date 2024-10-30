<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsabiliteController extends Controller
{
    public function responsabilite()
    {
        return view('Creerresponsabilite');
    }

    public function creerresponsabilite(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string|max:60',
            'Prenom' => 'required|string|max:60',
            'Responsabilité' => 'required|exists:responsabilites,id',
            'Téléphone' => 'required|string|max:20',
            'Email' => 'required|string|email|max:255',
            'Adresse' => 'required|string|max:255',
        ]);

        $responsb = personnel_restaurant::create([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            'Responsabilité' => $request->input('Responsabilité'),
            'Téléphone' => $request->input('Téléphone'),
            'Email' => $request->input('Email'),
            'Adresse' => $request->input('Adresse'),
        ]);
    

        Session::put('personnel_id', $personnel->id);
    
        return redirect()->route('Personnel_Restaurant');
    
    }

    public function listePersonnels()
    {
        $personnels = personnel_restaurant::with('responsabilite')->get(); 

        return view('Personnel_Restaurant', compact('personnels'));
    }
}
