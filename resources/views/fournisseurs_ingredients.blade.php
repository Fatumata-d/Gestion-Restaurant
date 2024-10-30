@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Listes des Fournisseurs de Chaque Produits</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="custom-table-header">
                    <tr>
                        <th>FOURNISSEURS</th>
                        <th>PRODUITS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fournisseurs as $fournisseur)
                        <tr>
                            <td style="font-weight:bold;text-transform: uppercase;">{{ $fournisseur->Prenom }} {{ $fournisseur->Nom }}</td>
                            <td>
                                <ul class="list-group">
                                    @foreach($fournisseur->ingredients as $ingredient)
                                        <li class="list-group-item custom-list-group-item">{{ $ingredient->Nom_ingredient }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
