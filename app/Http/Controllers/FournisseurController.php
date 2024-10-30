<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FournisseurController extends Controller
{
    public function fournisseur()
    {
        return view('CreerFournisseurs');
    }

    public function creerfournisseurs(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string|max:60',
            'Prenom' => 'required|string|max:60',
            'Téléphone' => 'required|string|max:20',
            'Email' => 'required|string|email|max:255',
            'Adresse' => 'required|string|max:255',
        ]);

        $fournisseur = fournisseur::create([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            'Téléphone' => $request->input('Téléphone'),
            'Email' => $request->input('Email'),
            'Adresse' => $request->input('Adresse'),
        ]);
    

        Session::put('fournisseur_id', $fournisseur->id);
    
        return redirect()->route('Fournisseurs');
    
    }

    public function listeFournisseurs()
    {
        $fournisseurs = fournisseur::all(); 

        return view('Fournisseurs', compact('fournisseurs'));
    }
}
