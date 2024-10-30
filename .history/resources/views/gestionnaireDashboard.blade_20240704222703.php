@extends('layout')

@section('content')
    <div class="container mt-5">
        <div>
          <h1 class="mb-4" style="font-weight:bold; text-align:center;" >TABLEAU DE BORD DE {{ $gestionnaire->Prenom }} {{ $gestionnaire->Nom }}</h1>
        </div>
        

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #E8624A; color: white;">
                        <h3>LES COMMANDES</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Plats</th>
                                    <th>Date de Commande</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($commandes as $commande)
                                <tr>
                                    <td>{{ $commande->id }}</td>
                                    <td>{{ $commande->client->Prenom }} {{ $commande->client->Nom }}</td>
                                    <td>
                                        @foreach($commande->plat as $plat)
                                            {{ $plat->Nom_Plat }} ({{ $plat->pivot->Quantité }}),
                                        @endforeach
                                    </td>
                                    <td>{{ $commande->Date_commande }}</td>
                                    <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" onchange="changeStyle()">
                                        <label class="form-check-label" for="inlineCheckbox1" id="labelCheckbox">Traité</label>
</div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #689B68; color: white;">
                        <h3>LES RESERVATIONS</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Date de Réservation</th>
                                    <th>Type de Table</th>
                                    <th>Emplacement</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->client->Prenom }} {{ $reservation->client->Nom }}</td>
                                    <td>{{ $reservation->Date_reservation }}</td>
                                    <td>{{ $reservation->type_table->TypeTable }}</td>
                                    <td>{{ $reservation->emplacement->EmplacementTable }}</td>
                                    <td>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Traité</label>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color:#EA9858;">
                        <h3>LES TYPES DE TABLE</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($types as $type)
                                <li>{{ $type->TypeTable }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color:#EA9858;">
                        <h3>LES EMPLACEMENTS DE TABLE</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($emplacements as $emplacement)
                                <li>{{ $emplacement->EmplacementTable }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <h3 class="text-center mb-4">LISTE DES CLIENTS DU RESTAURANT</h3>
        <br>
        @if ($clienteles->isEmpty())
            <p class="text-center">Aucun client trouvé.</p>
        @else
            <table class="table table-bordered border-secondary">
                <thead class="table-warning">
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clienteles as $clientele)
                        <tr>
                            <td>{{ $clientele->Prenom }}</td>
                            <td>{{ $clientele->Nom }}</td>
                            <td>{{ $clientele->Téléphone }}</td>
                            <td>{{ $clientele->Email }}</td>
                            <td>{{ $clientele->Adresse }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        
    </div>

    

@endsection



