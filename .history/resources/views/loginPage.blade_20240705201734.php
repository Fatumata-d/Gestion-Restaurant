@extends('layout')

@section('content')

    <h1>Se Connecter</h1>

    <br>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('loginPage') }}" method="POST" class="vstack gap-3">
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" values="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mot de Passe:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-orange">Se connecter</button>
            </div>
            </form>
        </div>
    </div>

    <br>
    <br>
@endsection