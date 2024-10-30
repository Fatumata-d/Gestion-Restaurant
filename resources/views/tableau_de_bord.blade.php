@extends('layout')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">TABLEAU DE BORD</h2>
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                LES STATISTIQUES SUR LES CLIENTS
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-primary mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E37A27">AUJOURD'HUI</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $jourClients }}</h5>
                                <p class="card-text">Nombre de clients enregistrés aujourd'hui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#507941 ">LE MOIS</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $moisClients }}</h5>
                                <p class="card-text">Nombre de clients enregistrés ce mois-ci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E84F22 ">L'ANNEE</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $anneeClients }}</h5>
                                <p class="card-text">Nombre de clients enregistrés cette année.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                LES STATISTIQUES SUR LES COMMANDES
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-warning mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E37A27">AUJOURD'HUI</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $commandeClientstoday }}</h5>
                                <p class="card-text">Nombre de commandes enregistrées aujourd'hui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-warning mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#507941 ">LE MOIS</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $commandeClients }}</h5>
                                <p class="card-text">Nombre de commandes enregistrées ce mois-ci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-warning mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E84F22 ">L'ANNEE</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $commandeClientsan }}</h5>
                                <p class="card-text">Nombre de commandes enregistrées cette année.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                LES STATISTIQUES SUR LES RESERVATIONS
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-success mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E37A27">AUJOURD'HUI</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $reservationClientstoday }}</h5>
                                <p class="card-text">Nombre de reservations enregistrées aujourd'hui.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-success mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#507941 ">LE MOIS</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $reservationClients }}</h5>
                                <p class="card-text">Nombre de reservations enregistrées ce mois-ci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-success mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E84F22 ">L'ANNEE</div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $reservationClientsan }}</h5>
                                <p class="card-text">Nombre de reservations enregistrées cette année.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                LES STATISTIQUES SUR LES MOUVEMENTS DE STOCKS
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-danger mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E37A27">AUJOURD'HUI</div>
                            <div class="card-body">
                                <p class="card-text">Les stocks d'ingredients sortis aujourd'hui.</p>
                                <ul>
                                    @foreach($stockOutToday as $name)
                                        <li>{{ $name ?? 'Non spécifié' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-danger mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#507941 ">LE MOIS</div>
                            <div class="card-body">
                                <p class="card-text">les stocks d'ingredients sortis ce mois-ci.</p>
                                <ul>
                                    @foreach($stockOutMois as $name)
                                        <li>{{ $name ?? 'Non spécifié' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-danger mb-3" style="max-width: 500rem;">
                            <div class="card-header" style="background-color:#E84F22 ">L'ANNEE</div>
                            <div class="card-body">
                                <p class="card-text">Les stocks d'ingredients sortis cette année.</p>
                                <ul>
                                    @foreach($stockOutAn as $name)
                                        <li>{{ $name ?? 'Non spécifié' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
