<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MouvementStockController;

use App\Http\Controllers\PlatIngredientController;
use App\Http\Controllers\GestionnaireSystemeController;
use App\Http\Controllers\PersonnelRestaurantController;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/fournisseurs', [FournisseurController::class, 'listeFournisseurs']);
Route::get('/gestionnaire_systeme', [GestionnaireSystemeController::class, 'listeGestionnaires']);
Route::get('/personnel_restaurant', [PersonnelRestaurantController::class, 'listePersonnel']);
Route::post('/ajouter-ingredients', [PlatIngredientController::class, 'formulaire']);
Route::post('/ajouter-ingredients', [PlatIngredientController::class, 'enregistrer']);

Route::get('/confirmation', [CommandeController::class, 'formulaireConfirmation']);
Route::get('/coordonees1', [CommandeController::class, 'Client'])->name('formulaire1');
Route::get('/coordonnees', [ReservationController::class, 'CoordonneesClient'])->name('formulaire2');
Route::post('/coordonnees', [ReservationController::class, 'coordonnees']);
Route::post('/creerFournisseur', [FournisseurController::class, 'creerFournisseurs']);
Route::post('/creerGestionnaire', [GestionnaireSystemeController::class, 'creerGestionnaire']);
Route::post('/creerPersonnel', [PersonnelRestaurantController::class, 'creerPersonnel']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('tableau_de_bord');
Route::post('/enregistrer-commande', [CommandeController::class, 'enregistrerCommande']);
Route::post('/enregistrercoordonnees', [CommandeController::class, 'EnregistrerCoordonnees'])->name('CoordonnéesEnregistrer');
Route::get('/fournisseurs-ingredients', [IngredientController::class, 'fournisseursAv']);
Route::get('/gestionnaire/{id}/dashboard', [GestionnaireSystemeController::class, 'dashboard']);
Route::get('/indexIngredients', [IngredientController::class, 'ingredient']);
Route::get('/infos', function () {
    return view('infos');
})->name('infos');
Route::post('/ingredients', [IngredientController::class, 'enregistrer']);
Route::get('/ingredients/creer', [IngredientController::class, 'create']);
Route::get('/menu', [MenuController::class, 'menu2'])->name('menu');
Route::get('/menu/create', [MenuController::class, 'create']);
Route::post('/menu/store', [MenuController::class, 'validation']);
Route::get('/mouvement-stock', [MouvementStockController::class, 'index']);
Route::post('/mouvement-stock/enregistrer', [MouvementStockController::class, 'enregistrer']);
Route::get('/nouveauFournisseur', [FournisseurController::class, 'fournisseur']);
Route::get('/nouveauGestionnaire', [GestionnaireSystemeController::class, 'gestionnaire']);
Route::get('/nouveauPersonnel', [PersonnelRestaurantController::class, 'personnel']);
Route::get('/plat/create', [PlatController::class, 'create']);
Route::post('/plat/valider', [PlatController::class, 'validation']);
Route::get('/plat/{plat_id}/menu', [MenuController::class, 'selectMenu']);
Route::post('/plat/{plat_id}/menu/associer', [MenuController::class, 'associer']);
Route::get('/plats-ingredients', [PlatController::class, 'platIngredient']);
Route::get('/reservation', [ReservationController::class, 'create']);

Route::post('/selectionner-plats', [CommandeController::class, 'selectionnerPlats'])->name('selectionnerPlats');
Route::get('/stocks_update', [MouvementStockController::class, 'formulaire']);
Route::post('/valider', [ReservationController::class, 'reserver']);

