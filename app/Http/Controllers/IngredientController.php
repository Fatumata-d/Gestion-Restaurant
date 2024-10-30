<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use App\Models\ingredients;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function create()
    {
        $fournisseurs = fournisseur::all();
        return view('creerIngredients', compact('fournisseurs'));
    }

    public function enregistrer(Request $request)
    {
        $request->validate([
            'Nom_ingredient' => 'required|string|max:60',
            'Date_Achat' => 'required|date',
            'Quantité' => 'required|integer',
            'Fournisseur' => 'required|exists:fournisseurs,id',
        ]);

        $ingredient = ingredients::create([
            'Nom_ingredient' => $request->input('Nom_ingredient'),
            'Date_Achat' => $request->input('Date_Achat'),
            'Quantité' => $request->input('Quantité'),
        ]);

        $ingredient->fournisseur()->attach($request->input('Fournisseur'));

        return redirect()->route('Ingredients');
    }

    public function fournisseursAvecIngredients()
    {
        $fournisseurs = fournisseur::with('ingredients')->get();
        return view('fournisseurs_ingredients', compact('fournisseurs'));
    }

    public function ingredient()
    {
        $ingredients = ingredients::all();
        return view('Ingredients', ['ingredients' => $ingredients]);
    }

    public function supprimer($id)
    {
        $ingredient = ingredients::find($id);
        if ($ingredient) {
            $ingredient->delete();
            return response()->json(['status' => 'success', 'message' => 'Ingredients supprimé avec succès.']);
        }
        return response()->json(['status' => 'error', 'message' => 'Ingredient non trouvé.'], 404);
    }
}
