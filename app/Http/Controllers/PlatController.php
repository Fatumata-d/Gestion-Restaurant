<?php

namespace App\Http\Controllers;

use App\Models\plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function create()
    {
        return view('creerPlat');
    }

    public function validation(Request $request)
    {
        $request->validate([
            'Nom_Plat' => 'required|string|max:50',
            'Prix' => 'required|numeric',
        ]);

        
        $plat = new plat();
        $plat->Nom_Plat = $request->Nom_Plat;
        $plat->Prix = $request->Prix;
        $plat->save();

        return redirect()->route('selectionnerMenu', ['plat_id' => $plat->id]);
    }

    public function platIngredient()
    {
        $plats = Plat::with('ingredients')->get();
        return view('Plats_Ingredients', compact('plats'));
    }
}
