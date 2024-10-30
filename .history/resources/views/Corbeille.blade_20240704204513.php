@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4" style="font-weight:bold; text-align:center;">CORBEILLE</h1>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #E8624A; color: white;">
                        <h3>COMMANDES SUPPRIMÉES</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Plats</th>
                                    <th>Date de Commande</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($commandes as $commande)
                                @if($commande->deleted)
                                <tr>
                                    <td>{{ $commande->id }}</td>
                                    <td>{{ $commande->client->Prenom }} {{ $commande->client->Nom }}</td>
                                    <td>
                                        @foreach($commande->plat as $plat)
                                            {{ $plat->Nom_Plat }} ({{ $plat->pivot->Quantité }}),
                                        @endforeach
                                    </td>
                                    <td>{{ $commande->Date_commande }}</td>
                                </tr>
                                @endif
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
                        <h3>RESERVATIONS SUPPRIMÉES</h3>
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                @if($reservation->deleted)
                                <tr>
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->client->Prenom }} {{ $reservation->client->Nom }}</td>
                                    <td>{{ $reservation->Date_reservation }}</td>
                                    <td>{{ $reservation->type_table->TypeTable }}</td>
                                    <td>{{ $reservation->emplacement->EmplacementTable }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
