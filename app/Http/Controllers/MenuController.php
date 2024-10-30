<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\plat;
use Illuminate\Http\Request;
use App\Models\responsabilite;
use App\Http\Controllers\Controller;
use App\Models\personnel_restaurant;

class MenuController extends Controller
{
    public function menu()
    {
        $menus = menu::with(['plat', 'personnel_restaurant.responsabilite'])->get();
        return view('menu', compact('menus'));
    }

    public function menu2()
    {
        $menus = menu::with('plat')->get();
        return view('menu', compact('menus'));
    }

    public function create()
    {
        $Chef_Cuisinier = personnel_restaurant::whereHas('responsabilite', function($query) {
            $query->where('Nom_Responsabilité', 'Chef_Cuisinier');
        })->first();

        if($Chef_Cuisinier) {
            return view('creerMenu', ['Createur' => $Chef_Cuisinier->id]);
        } else {
            return redirect()->route('menu')->with('error', 'Aucun chef cuisinier trouvé.');
        }
    }




    public function validation(Request $request) {
        $request->validate([
            'Nom_Menu' => 'required|string|max:50',
        ]);
    
       
        $Chef_Cuisinier = personnel_restaurant::whereHas('responsabilite', function($query) {
            $query->where('Nom_Responsabilité', 'Chef_Cuisinier');
        })->first();
    
        
        if (!$Chef_Cuisinier) {
            return redirect()->route('menu')->with('error', 'Aucun chef cuisinier trouvé.');
        }
    
        
        $menu = new menu();
        $menu->Nom_Menu = $request->Nom_Menu;
        $menu->Createur = $Chef_Cuisinier->id; 
        $menu->save();
    
        
        return redirect()->route('menu');
    }

    public function selectMenu($plat_id)
    {
        $menus = menu::all();
        return view('selectionnerMenu', compact('menus', 'plat_id'));
    }

    public function associer(Request $request, $plat_id)
    {
        $plat = plat::findOrFail($plat_id);
        $plat->menu()->attach($request->menu_id);
        return redirect()->route('creerPlat');
    }
    
}
