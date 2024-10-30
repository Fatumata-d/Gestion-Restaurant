@extends('layout')

@section('content')
<div class="container custom-border mt-4">
    <h1 class="mb-4">Ajouter un Mouvement de Stock</h1>

    <form action="{{ route('enregistrerMouv') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Ingredients" class="form-label">Ingrédient :</label>
            <select name="Ingredients" id="Ingredients" class="form-select" required>
                @foreach($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}">{{ $ingredient->Nom_ingredient }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Date_Mouvement" class="form-label">Date de Mouvement :</label>
            <input type="datetime-local" name="Date_Mouvement" id="Date_Mouvement" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Quantité" class="form-label">Quantité :</label>
            <input type="number" name="Quantité" id="Quantité" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Type_Mouvement" class="form-label">Type de Mouvement :</label>
            <select name="Type_Mouvement" id="Type_Mouvement" class="form-select" required>
                <option value="1">Entrée</option>
                <option value="0">Sortie</option>
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-orange">Ajouter</button>
        </div>
    </form>
</div>
@endsection
