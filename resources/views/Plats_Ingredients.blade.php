@extends('layout')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Liste des Plats et leurs Ingrédients</h1>

    @foreach($plats as $plat)
    <div class="card mb-4">
        <div class="card-body" style="background-color: #F7BE7B ">
            <h2 class="card-title">{{ $plat->Nom_Plat }}</h2>
            <h3 class="card-subtitle mb-3">Ingrédients:</h3>
            <ul class="list-group list-group-flush">
                @foreach($plat->ingredients as $ingredient)
                <li class="list-group-item">{{ $ingredient->Nom_ingredient }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
</div>
@endsection
