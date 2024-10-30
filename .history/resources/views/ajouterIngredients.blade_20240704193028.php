@extends('layout')

@section('content')
<div class="container custom-border mt-4">
    <h1 class="text-center mb-4">Ajouter des Ingrédients à un Plat</h1>
    <form action="{{ route('Ajouter') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="plat" class="form-label">Plat :</label>
            <select name="plat" id="plat" class="form-select" required>
                @foreach($plats as $platItem)
                    <option value="{{ $platItem->id }}">{{ $platItem->Nom_Plat }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingrédients :</label>
            <select name="ingredients[]" id="ingredients" class="form-select" multiple required>
                @foreach($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}">{{ $ingredient->Nom_ingredient }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-orange">Ajouter</button>
        </div>
        
    </form>
</div>

@endsection
