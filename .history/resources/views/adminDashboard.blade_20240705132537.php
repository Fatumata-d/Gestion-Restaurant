@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tableau de Bord Administratif</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-4+XzXVhsOHh4L2MhYHfGpBZtYCxt/R1r2p5ZklMVc3Y=" crossorigin="anonymous"></script>
        <style>
        
            .dashboard-header {
                background-color: #343a40;
                color: white;
                padding: 15px;
                text-align: center;
            }
            .card {
                margin: 15px;
            }
            .card-header {
                background-color:#577557 ;
                color: white;
            }
            .btn-custom {
                background-color: #E37A27;
                color: white;
                font-weight: bold;
            }
            .btn-custom:hover {
                background-color: #D3691E;
            }
            .card-body a {
                display: block;
                margin: 5px 0;
                text-decoration: underline;
                color: #45459B;
            }
            .card-body a:hover {
                color: #D3691E;
            }
        </style>
    </head>
    <body>
        <div class="dashboard-header">
            <h1>Tableau de Bord Administratif</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            Gestion des Stocks
                        </div>
                        <div class="card-body text-center">
                            <a href="{{ route('StockUpdate') }}">Création Mouvement de Stocks</a>
                            <a href="{{ route('Stocks') }}">Les Mouvements Stocks</a>
                            <a href="{{ route('creerIngredients') }}">Création Ingredients</a>
                            <a href="{{ route('Ingredients') }}">Les Produits</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            Gestion des Menus et Plats
                        </div>
                        <div class="card-body text-center">
                            <a href="{{ route('creerMenu') }}">Création Menu</a>
                            <a href="{{ route('creerPlat') }}">Création Plat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            Gestion des Ingrédients
                        </div>
                        <div class="card-body text-center">
                            <a href="{{ route('fournisseurs_ingredients') }}">Les Fournisseurs et Les produits</a>
                            <a href="{{ route('Plats_Ingredients') }}">Les plats et les Ingredients</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <div class="card">
                        <div class="card-header text-center">
                            Les Gestionnaires du systeme
                        </div>
                        <div class="card-body text-center">
                            <a href="{{ route('CreerGestionnaire') }}">Création Gestionnaire</a>
                            <a href="{{ route('Gestionnaire_Systeme') }}">Les Gestionnaires Systeme</a>
                            <a href="{{ route('gestionnaireDashboard') }}">Tableau de bord Gestionnaire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            Gestion du Personnel et Partenaire du restaurant
                        </div>
                        <div class="card-body text-center">
                            <a href="{{ route('CreerFournisseurs') }}">Création Fournisseur</a>
                            <a href="{{ route('Fournisseurs') }}">Les Fournisseurs</a>
                            <a href="{{ route('CreerPersonnel') }}">Création Personnel</a>
                            <a href="{{ route('Personnel_Restaurant') }}">Les Personnels du Restaurant</a>
                            <a href="{{ route('Creerresponsabilite') }}">Création Poste</a>
                            <a href="{{ route('Responsabilite') }}">Les Postes disponibles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Inclure Bootstrap JS depuis jsDelivr CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+2JH5Wv2I5I6ie55z0e5qN8lWv8zm" crossorigin="anonymous"></script>
    </body>
</html>
@endsection
