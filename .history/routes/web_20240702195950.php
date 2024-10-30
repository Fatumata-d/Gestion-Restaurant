<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


GET|HEAD   / .............................................................................. welcome
  GET|HEAD   Fournisseurs .................... Fournisseurs › FournisseurController@listeFournisseurs
  GET|HEAD   Gestionnaire_Systeme Gestionnaire_Systeme › GestionnaireSystemeController@listeGestionn…
  GET|HEAD   Personnel_Restaurant Personnel_Restaurant › PersonnelRestaurantController@listePersonne…
  POST       _ignition/execute-solution ignition.executeSolution › Spatie\LaravelIgnition › ExecuteS…  
  GET|HEAD   _ignition/health-check ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckContr…  
  POST       _ignition/update-config ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigCo…  
  GET|HEAD   ajouter-ingredients ........... ajouterIngredients › PlatIngredientController@formulaire  
  POST       ajouter-ingredients ..................... Ajouter › PlatIngredientController@enregistrer  
  GET|HEAD   api/user ...............................................................................  
  GET|HEAD   confirmation .......... CommandeConfirmation › CommandeController@formulaireConfirmation  
  GET|HEAD   coordonees1 .................................... formulaire1 › CommandeController@Client  
  GET|HEAD   coordonnees ...................... formulaire2 › ReservationController@CoordonneesClient  
  POST       coordonnees ............................ coordonnees › ReservationController@coordonnees  
  POST       creerFournisseur ............... creationFourn › FournisseurController@creerfournisseurs  
  POST       creerGestionnaire ....... CreationGest › GestionnaireSystemeController@creergestionnaire  
  POST       creerPersonnel ............ CreationPerso › PersonnelRestaurantController@creerpersonnel
  GET|HEAD   dashboard .................................. tableau_de_bord › DashboardController@index  
  POST       enregistrer-commande ...... CommandeEnregistrer › CommandeController@enregistrerCommande  
  POST       enregistrercoordonnees CoordonnéesEnregistrer › CommandeController@EnregistrerCoordonn…   
  GET|HEAD   fournisseurs-ingredients fournisseurs_ingredients › IngredientController@fournisseursAv…  
  GET|HEAD   gestionnaire/{id}/dashboard gestionnaireDashboard › GestionnaireSystemeController@dashb…  
  GET|HEAD   indexIngredients ......................... Ingredients › IngredientController@ingredient  
  GET|HEAD   infos ............................................................................ infos  
  POST       ingredients .................. enregistrerIngredients › IngredientController@enregistrer  
  GET|HEAD   ingredients/creer ....................... creerIngredients › IngredientController@create  
  GET|HEAD   menu ....................................................... menu › MenuController@menu2  
  GET|HEAD   menu/create .......................................... creerMenu › MenuController@create  
  POST       menu/store ..................................... menuValider › MenuController@validation  
  GET|HEAD   mouvement-stock ................................ Stocks › MouvementStockController@index  
  POST       mouvement-stock/enregistrer ..... enregistrerMouv › MouvementStockController@enregistrer  
  GET|HEAD   nouveauFournisseur ............... CreerFournisseurs › FournisseurController@fournisseur
  GET|HEAD   nouveauGestionnaire ..... CreerGestionnaire › GestionnaireSystemeController@gestionnaire  
  GET|HEAD   nouveauPersonnel .............. CreerPersonnel › PersonnelRestaurantController@personnel
  GET|HEAD   plat/create .......................................... creerPlat › PlatController@create  
  POST       plat/valider ................................... platValider › PlatController@validation  
  GET|HEAD   plat/{plat_id}/menu ....................... selectionnerMenu › MenuController@selectMenu  
  POST       plat/{plat_id}/menu/associer .................... associerMenu › MenuController@associer  
  GET|HEAD   plats-ingredients .................... Plats_Ingredients › PlatController@platIngredient  
  GET|HEAD   reservation ....................... formulaireReservation › ReservationController@create  
  GET|HEAD   sanctum/csrf-cookie .. sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show  
  POST       selectionner-plats ............ selectionnerPlats › CommandeController@selectionnerPlats  
  GET|HEAD   stocks_update ........................ StockUpdate › MouvementStockController@formulaire  
  POST       valider ............................ validerReservation › ReservationController@reserver  
  POST       verifier ........................... verifierFormulaire › ReservationController@verifier  
