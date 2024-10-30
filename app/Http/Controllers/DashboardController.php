<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\commande;
use App\Models\reservation;
use App\Models\mouvement_stock;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        
        $jourClients = client::whereDate('created_at', Carbon::today())->count();

        
        $moisClients = client::whereMonth('created_at', Carbon::now()->month)
                ->whereYear('created_at', Carbon::now()->year)
                ->count();

        
        $anneeClients = client::whereYear('created_at', Carbon::now()->year)->count();

        $commandeClientstoday = commande::whereDate('created_at', Carbon::today())->count();
        $commandeClients = commande::WhereMonth('created_at', Carbon::now()->month)
                ->whereYear('created_at', Carbon::now()->year)
                ->count();

        $reservationClientstoday = reservation::whereDate('created_at', Carbon::today())->count();
        $reservationClients = reservation::WhereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)
        ->count();

        $commandeClientsan = commande::whereYear('created_at', Carbon::now()->year)->count();
        $reservationClientsan = reservation::whereYear('created_at', Carbon::now()->year)->count();

        $stockOutToday = mouvement_stock::whereDate('created_at', Carbon::today())
            ->where('Type_Mouvement', 'Sortie')
            ->with(['ingredients' => function ($query) {
                $query->select('id', 'Nom_ingredient', 'Quantité'); 
            }])
            ->get()
            ->pluck('ingredients.Nom_ingredient');

        $stockOutMois = mouvement_stock::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->where('Type_Mouvement', 'Sortie')
            ->with(['ingredients' => function ($query) {
                $query->select('id', 'Nom_ingredient'); 
            }])
            ->get()
            ->pluck('ingredients.Nom_ingredient');

        $stockOutAn =mouvement_stock::WhereYear('created_at', Carbon::now()->year)
            ->where('Type_Mouvement', 'Sortie')
            ->with(['ingredients' => function ($query) {
                $query->select('id', 'Nom_ingredient'); 
            }])
            ->get()
            ->pluck('ingredients.Nom_ingredient');

        return view('tableau_de_bord', compact('jourClients', 'moisClients', 'anneeClients', 'commandeClientstoday','commandeClients', 'commandeClientsan', 'reservationClientstoday','reservationClients', 'reservationClientsan', 'stockOutToday', 'stockOutMois', 'stockOutAn'));
    }
}
