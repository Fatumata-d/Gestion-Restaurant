@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">LES PRINCIPAUX POSTES</h1>
        <br>
        @if ($gestionnaires->isEmpty())
            <p>Aucun fournisseur trouvé.</p>
        @else
            <table class="table table-bordered border-secondary">
                <thead class="table-warning">
                    <tr>
                        <th>@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">LISTE DES GESTIONNAIRE DU SYSTEME DU RESTAURANT</h1>
        <br>
        @if ($gestionnaires->isEmpty())
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
                    @foreach ($gestionnaires as $gestionnaire)
                        <tr>
                            <td>{{ $gestionnaire->Prenom }}</td>
                            <td>{{ $gestionnaire->Nom }}</td>
                            <td>{{ $gestionnaire->Téléphone }}</td>
                            <td>{{ $gestionnaire->Email }}</td>
                            <td>{{ $gestionnaire->Adresse }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gestionnaires as $gestionnaire)
                        <tr>
                            <td>{{ $gestionnaire->Prenom }}</td>
                            <td>{{ $gestionnaire->Nom }}</td>
                            <td>{{ $gestionnaire->Téléphone }}</td>
                            <td>{{ $gestionnaire->Email }}</td>
                            <td>{{ $gestionnaire->Adresse }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
