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
            'Nom_Responsabilité' => $request->input('Nom_Responsabilité'),
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
