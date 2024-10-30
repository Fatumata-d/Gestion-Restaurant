<?php

namespace App\Http\Controllers;

use App\Models\ingredients;
use Illuminate\Http\Request;
use App\Models\mouvement_stock;

class MouvementStockController extends Controller
{
    public function formulaire()
    {
        $ingredients = ingredients::all();
        return view('StockUpdate', compact('ingredients'));
    }

    public function enregistrer(Request $request)
    {
        $validated = $request->validate([
            'Ingredients' => 'required|exists:ingredients,id',
            'Date_Mouvement' => 'required|date',
            'Quantité' => 'required|integer|min:1',
            'Type_Mouvement' => 'required|boolean',
        ]);

        mouvement_stock::create([
            'Ingredients' => $request->input('Ingredients'),
            'Date_Mouvement' => $request->input('Date_Mouvement'),
            'Quantité' => $request->input('Quantité'),
            'Type_Mouvement' => $request->input('Type_Mouvement'),
        ]);

        return redirect()->route('Stocks')->with('Mouvement de stock ajouté avec succès');
    }

    public function index()
    {
        $mouvements = mouvement_stock::with('ingredients')->get();
        return view('Stocks', compact('mouvements'));
    }

    public function supprimer($id)
    {
        $mouvement = mouvement_stock::find($id);
        if ($mouvement) {
            $mouvement->delete();
            return response()->json(['status' => 'success', 'message' => 'Mouvement supprimé avec succès.']);
        }
        return response()->json(['status' => 'error', 'message' => 'Mouvement non trouvé.'], 404);
    }

    public function modifier($id)
    {
        $mouvement = mouvement_stock::find($id);
        if ($mouvement) {
            return response()->json(['status' => 'success', 'data' => $mouvement]);
        }
        return response()->json(['status' => 'error', 'message' => 'Mouvement non trouvé.'], 404);
    }

    public function update(Request $request, $id)
    {
        $mouvement = mouvement_stock::find($id);
        if ($mouvement) {
            $mouvement->update($request->all());
            return response()->json(['status' => 'success', 'message' => 'Mouvement mis à jour avec succès.']);
        }
        return response()->json(['status' => 'error', 'message' => 'Mouvement non trouvé.'], 404);
    }
}
