@extends('layout')

@section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
    </head>
    <body>
        <h1>Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="{{ route('/menu/create') }}">Création Menu</a></li>
                <li><a href="{{ route('/plat/create') }}">Création Plat</a></li>
                <li><a href="{{ route('/stocks_update') }}">Création Mouvement de Stocks</a></li>
                <li><a href="{{ route('/mouvement-stock') }}">Les Mouvements Stocks</a></li>
                <li><a href="{{ route('/nouveauGestionnaire') }}">Création Gestionnaire</a></li>
                <li><a href="{{ route('/gestionnaire_systeme') }}">Les Gestionnaires Systeme</a></li>
                <li><a href="{{ route('/gestionnaire/1/dashboard') }}">Tableau de bord Gestionnaire</a></li>
                <li><a href="{{ route('/ingredients/creer') }}">Création Ingredients</a></li>
                <li><a href="{{ route('/indexIngredients') }}">Les Produits</a></li>
                <li><a href="{{ route('/fournisseurs-ingredients') }}">Les Fournisseurs et Les produits</a></li>
                <li><a href="{{ route('/plats-ingredients') }}">Les plats et les Ingredients</a></li>
                <li><a href="{{ route('/nouveauFournisseur') }}">Création Fournisseur</a></li>
                <li><a href="{{ route('/fournisseurs') }}">Les Fournisseurs</a></li>
                <li><a href="{{ route('/nouveauPersonnel') }}">Création Personnel</a></li>
                <li><a href="{{ route('/personnel_restaurant') }}">Les Personnel</a></li>
                <li><a href="{{ route('/nouvellePoste') }}">Stocks</a></li>
                <li><a href="{{ route('/postes') }}">Stocks</a></li>
                 
            </ul>
        </nav>
    </body>
    </html>
@endsection
