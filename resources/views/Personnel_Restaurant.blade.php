@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">LISTE DES PERSONNELS DU RESTAURANT</h1>
        <br>
        @if ($personnels->isEmpty())
            <p>Aucun personnel trouvé.</p>
        @else
            <table class="table table-bordered border-secondary">
                <thead class="table-warning">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Responsabilité</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personnels as $personnel)
                        <tr>
                            <td>{{ $personnel->Nom }}</td>
                            <td>{{ $personnel->Prenom }}</td>
                            <td>{{ $personnel->responsabilite->Nom_Responsabilité }}</td>
                            <td>{{ $personnel->Téléphone }}</td>
                            <td>{{ $personnel->Email }}</td>
                            <td>{{ $personnel->Adresse }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
