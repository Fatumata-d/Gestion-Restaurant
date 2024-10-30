<?php

namespace App\Http\Controllers;

use App\Models\plat;
use App\Models\client;
use App\Models\commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\gestionnaire_systeme;
use Illuminate\Support\Facades\Session;

class CommandeController extends Controller
{
    public function Client()
    {
        return view('formulaire1');
    }

    public function EnregistrerCoordonnees(Request $request)
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
    

        Session::put('commande_client_id', $client->id);
    
        return redirect()->route('menu');
    
    }


    public function selectionnerPlats(Request $request)
    {
        $platsSelectionnes = $request->input('plat', []);

        Session::put('plats_selectionnes', $platsSelectionnes);

        return redirect()->route('CommandeConfirmation');
    }


    public function formulaireConfirmation()
    {
       
        $platsSelectionnes = Session::get('plats_selectionnes', []);

        
        // Vérifiez le contenu de la session
    

        // Les identifiants des plats sont directement les valeurs du tableau
        $platsIds = array_map('intval', array_map('trim', $platsSelectionnes));


        // Vérifiez les identifiants des plats
        

        // Récupérez les détails des plats à partir de la base de données
        $plats = plat::whereIn('id', $platsIds)->get();

        // Vérifiez le contenu des plats récupérés
    

        // Passez les données des plats à la vue
        return view('CommandeConfirmation', compact('plats'));
    }


    public function enregistrerCommande(Request $request)
    {       
        $request->validate([
            'Quantité.*' => 'required|integer|min:1',
        ]);
    
        $platsSelectionnes = $request->input('Quantité');
    
        $commande = new Commande();
        $commande->Correspondance = Session::get('commande_client_id');
        $commande->Quantité = 0;
        $commande->Destinataire = gestionnaire_systeme::first()->id;
        $commande->save();
    
        foreach ($platsSelectionnes as $platId => $quantite) {
            $commande->plat()->attach($platId, ['Quantité' => $quantite]);
        }
    
        
    
        return redirect()->route('CommandeReussi');
    }

    



}
