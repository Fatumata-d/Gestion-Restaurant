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
                <li><a href="{{ route('/menu/create') }}">Stocks</a></li>
                <li><a href="{{ route('/plat/create') }}">Stocks</a></li>
                <li><a href="{{ route('/stocks_update') }}">Stocks</a></li>
                <li><a href="{{ route('/mouvement-stock') }}">Stocks</a></li>
                <li><a href="{{ route('/nouveauGestionnaire') }}">Stocks</a></li>
                <li><a href="{{ route('/gestionnaire_systeme') }}">Stocks</a></li>
                <li><a href="{{ route('/gestionnaire/1/dashboard') }}">Stocks</a></li>
                <li><a href="{{ route('/ingredients/creer') }}">Stocks</a></li>
                <li><a href="{{ route('/indexIngredients') }}">Stocks</a></li>
                <li><a href="{{ route('/fournisseurs-ingredients') }}">Stocks</a></li>
                <li><a href="{{ route('/plats-ingredients') }}">Stocks</a></li>
                <li><a href="{{ route('/nouveauFournisseur') }}">Stocks</a></li>
                <li><a href="{{ route('/fournisseurs') }}">Stocks</a></li>
                <li><a href="{{ route('/nouveauPersonnel') }}">Stocks</a></li>
                <li><a href="{{ route('/personnel_restaurant') }}">Stocks</a></li>
                <li><a href="{{ route('/nouvellePoste') }}">Stocks</a></li>
                <li><a href="{{ route('/nouvellePoste') }}">Stocks</a></li>
                 
            </ul>
        </nav>
    </body>
    </html>
@endsection
