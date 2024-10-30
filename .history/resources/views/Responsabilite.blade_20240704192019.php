@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">LES PRINCIPALES POSTES</h1>
        <br>
        @if ($responsabilites->isEmpty())
            <p>Aucune poste trouvé.</p>
        @else
            <table class="table table-bordered border-secondary">
                <thead class="table-warning">
                    <tr>
                        <th>Nom_Responsabilité</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gestionnaires as $gestionnaire)
                        <tr>
                            <td>{{ $gestionnaire->Nom_Responsabilité}}</td>
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
