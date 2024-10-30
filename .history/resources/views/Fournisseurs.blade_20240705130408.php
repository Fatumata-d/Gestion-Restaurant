@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">LISTE DES FOURNISSEURS DU RESTAURANT</h1>
        <br>
        @if ($fournisseurs->isEmpty())
            <p>Aucun fournisseur trouvé.</p>
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
                    @foreach ($fournisseurs as $fournisseur)
                        <tr>
                            <td>{{ $fournisseur->Prenom }}</td>
                            <td>{{ $fournisseur->Nom }}</td>
                            <td>{{ $fournisseur->Téléphone }}</td>
                            <td>{{ $fournisseur->Email }}</td>
                            <td>{{ $fournisseur->Adresse }}</td>
                        </tr>
                      
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
