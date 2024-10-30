<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\type_table;
use App\Models\commande;
use App\Models\emplacement;
use App\Models\reservation;
use Illuminate\Http\Request;
use App\Models\gestionnaire_systeme;
use Illuminate\Support\Facades\Session;

class GestionnaireSystemeController extends Controller
{
    public function dashboard()
    {
        // Récupérez toutes les commandes
        $commandes = commande::with(['client', 'plat'])
            ->whereHas('plat')
            ->get();

        // Récupérez toutes les réservations
        $reservations = reservation::with('client', 'type_table', 'emplacement')->get();

        $gestionnaire = gestionnaire_systeme::first();

        $clienteles = client::all();

        $emplacements = emplacement::all(); 

        $types = type_table::all(); 

        // Passez les données à la vue
        return view('gestionnaireDashboard', compact('clienteles','types','emplacements','commandes', 'reservations','gestionnaire'));
    }

    
    public function gestionnaire()
    {
        return view('CreerGestionnaire');
    }

    public function creergestionnaire(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string|max:60',
            'Prenom' => 'required|string|max:60',
            'Téléphone' => 'required|string|max:20',
            'Email' => 'required|string|email|max:255',
            'Adresse' => 'required|string|max:255',
        ]);

        $gestionnaire = gestionnaire_systeme::create([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            'Téléphone' => $request->input('Téléphone'),
            'Email' => $request->input('Email'),
            'Adresse' => $request->input('Adresse'),
        ]);
    

        Session::put('gestionnaire_id', $gestionnaire->id);
    
        return redirect()->route('Gestionnaire_Systeme');
    
    }

    public function listeGestionnaire()
    {
        $gestionnaires = gestionnaire_systeme::all(); 

        return view('Gestionnaire_Systeme', compact('gestionnaires'));
    }
}
