<?php

namespace App\Http\Controllers;

use App\Models\plat;
use App\Models\ingredients;
use Illuminate\Http\Request;

class PlatIngredientController extends Controller
{
    public function formulaire()
    {
        $plats = plat::all();
        $ingredients = ingredients::all();
        return view('ajouterIngredients', compact('plats', 'ingredients'));
    }

    public function enregistrer(Request $request)
    {
        $validated = $request->validate([
            'plat' => 'required|exists:plats,id',
            'ingredients' => 'required|array',
            'ingredients.*' => 'exists:ingredients,id',
        ]);

        $plat = Plat::findOrFail($validated['plat']);
        $plat->ingredients()->attach($validated['ingredients']);

        return redirect()->route('Plats_Ingredients')->with('success', 'Ingrédients ajoutés avec succès');
    }

}
