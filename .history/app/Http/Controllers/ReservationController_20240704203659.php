<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\type_table;
use App\Models\emplacement;
use App\Models\reservation;
use App\Models\gestionnaire_systeme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function CoordonneesClient()
    {
        return view('formulaire2');
    }

    public function coordonnees(Request $request)
    {
        $request->validate([
            'Nom' => 'required|string|max:60',
            'Prenom' => 'required|string|max:60',
            'Téléphone' => 'required|string|max:20',
            'Email' => 'required|string|email|max:255',
            'Adresse' => 'required|string|max:255',
        ]);

        $client = client::create([
            'Nom' => $request->input('Nom'),
            'Prenom' => $request->input('Prenom'),
            'Téléphone' => $request->input('Téléphone'),
            'Email' => $request->input('Email'),
            'Adresse' => $request->input('Adresse'),
        ]);

        Session::put('idClient', $client->id);

        return redirect()->route('formulaireReservation');
    }

    public function create()
    {
        $types_tables = type_table::all();
        $emplacements = emplacement::all();
        return view('formulaireReservation', compact('types_tables', 'emplacements'));
    }


    public function reserver(Request $request)
    {
        $request->validate([
            'Date_reservation' => 'required|date',
            'Type_Table' => 'required|exists:type_tables,id',
            'Emplacement_Table' => 'required|exists:emplacements,id',
        ]);

        $client = Session::get('idClient');

        if (!$client) {
            return redirect()->route('formulaire2')->with('error', 'Veuillez entrer vos coordonnées d\'abord.');
        }

        $reservation = new reservation();
        $reservation->Correspondance = $client;
        $reservation->Date_reservation = $request->input('Date_reservation');
        $reservation->Type_Table = $request->input('Type_Table');
        $reservation->Emplacement_Table = $request->input('Emplacement_Table');
        $reservation->Destinataire = gestionnaire_systeme::first()->id;
        $reservation->save();

        return redirect()->route('ReservationReussi');
     
    }

    
}
