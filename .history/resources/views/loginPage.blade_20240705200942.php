@extends('layout')

@section('content')

    <h1>Se Connecter</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('loginPage') }}" method="POST" class="vstack gap-3">
            <div class="mb-3">
                <label for="Nom" class="form-label">Nom:</label>
                <input type="text" name="Nom" id="Nom" class="form-control" required>
            </div>
                                <div class="mb-3">
                                    <label for="Prenom" class="form-label">Prénom:</label>
                                    <input type="text" name="Prenom" id="Prenom" class="form-control" required>
                                </div>
            </form>
        </div>
    </div>

@endsection