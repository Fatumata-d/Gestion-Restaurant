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
use App\Http\Controllers\ResponsabiliteController;
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

Route::get('/menu', [MenuController::class, 'menu2'])->name('menu');

Route::get('/infos', function () {
    return view('infos');
})->name('infos');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('tableau_de_bord');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/menu/create', [MenuController::class, 'create'])->name('creerMenu');
Route::post('/menu/store', [MenuController::class, 'validation'])->name('menuValider');


Route::get('/plat/create', [PlatController::class, 'create'])->name('creerPlat');
Route::post('/plat/valider', [PlatController::class, 'validation'])->name('platValider');
Route::get('/plat/{plat_id}/menu', [MenuController::class, 'selectMenu'])->name('selectionnerMenu');
Route::post('/plat/{plat_id}/menu/associer', [MenuController::class, 'associer'])->name('associerMenu');



Route::get('/coordonees1', [CommandeController::class, 'Client'])->name('formulaire1');
Route::post('/enregistrercoordonnees', [CommandeController::class, 'EnregistrerCoordonnees'])->name('CoordonnéesEnregistrer');
Route::post('/selectionner-plats', [CommandeController::class, 'selectionnerPlats'])->name('selectionnerPlats');
Route::get('/confirmation', [CommandeController::class, 'formulaireConfirmation'])->name('CommandeConfirmation');
Route::get('/commande-reussi', function(){
    return view('CommandeReussi');
})->name('CommandeReussi');


Route::get('/coordonnees', [ReservationController::class, 'CoordonneesClient'])->name('formulaire2');
Route::post('/coordonnees', [ReservationController::class, 'coordonnees'])->name('coordonnées');
Route::get('/reservation', [ReservationController::class, 'create'])->name('formulaireReservation');
Route::post('/valider', [ReservationController::class, 'reserver'])->name('validerReservation');
Route::get('/reservation-reussi', function(){
    return view('ReservationReussi');
})->name('ReservationReussi');


Route::get('/stocks_update', [MouvementStockController::class, 'formulaire'])->name('StockUpdate');
Route::post('/mouvement-stock/enregistrer', [MouvementStockController::class, 'enregistrer'])->name('enregistrerMouv');
Route::get('/mouvement-stock', [MouvementStockController::class, 'index'])->name('Stocks');
Route::delete('/mouvements/{id}', [MouvementStockController::class, 'supprimer'])->name('mouvements.supprimer');
Route::get('/mouvements/{id}/modifier', [MouvementStockController::class, 'modifier'])->name('mouvements.modifier');
Route::put('/mouvements/{id}', [MouvementStockController::class, 'update'])->name('mouvements.update');

Route::get('/nouveauGestionnaire', [GestionnaireSystemeController::class, 'gestionnaire'])->name('CreerGestionnaire');
Route::post('/creerGestionnaire', [GestionnaireSystemeController::class, 'creerGestionnaire'])->name('CreationGest');
Route::get('/gestionnaire_systeme', [GestionnaireSystemeController::class, 'listeGestionnaires'])->name('Gestionnaire_Systeme');
Route::get('/gestionnaire/1/dashboard', [GestionnaireSystemeController::class, 'dashboard'])->name('gestionnaireDashboard');

Route::get('/ingredients/creer', [IngredientController::class, 'create'])->name('creerIngredients');
Route::post('/ingredients', [IngredientController::class, 'enregistrer'])->name('enregistrerIngredients');
Route::get('/indexIngredients', [IngredientController::class, 'ingredient'])->name('Ingredients');

Route::get('/fournisseurs-ingredients', [IngredientController::class, 'fournisseursAvecIngredients'])->name('fournisseurs_ingredients');





Route::get('/fournisseurs', [FournisseurController::class, 'listeFournisseurs'])->name('Fournisseurs');

Route::get('/personnel_restaurant', [PersonnelRestaurantController::class, 'listePersonnel'])->name('Personnel_Restaurant');
Route::post('/ajouter-ingredients', [PlatIngredientController::class, 'formulaire'])->name('ajouterIngredients');
Route::post('/ajouter-ingredients', [PlatIngredientController::class, 'enregistrer'])->name('Ajouter');








Route::post('/creerFournisseur', [FournisseurController::class, 'creerFournisseurs'])->name('creationFourn');

Route::post('/creerPersonnel', [PersonnelRestaurantController::class, 'creerPersonnel'])->name('CreationPerso');

Route::post('/enregistrer-commande', [CommandeController::class, 'enregistrerCommande'])->name('CommandeEnregistrer');












Route::get('/nouveauFournisseur', [FournisseurController::class, 'fournisseur'])->name('CreerFournisseurs');

Route::get('/nouveauPersonnel', [PersonnelRestaurantController::class, 'personnel'])->name('CreerPersonnel');

Route::get('/plats-ingredients', [PlatController::class, 'platIngredient'])->name('Plats_Ingredients');




Route::get('/nouvellePoste', [ResponsabiliteController::class, 'responsabilite'])->name('Creerresponsabilite');
Route::post('/creerresponsabilite', [ResponsabiliteController::class, 'creerResponsabilite'])->name('Creationrespon');
Route::get('/postes', [ResponsabiliteController::class, 'listeResponsabilite'])->name('Responsabilite');



