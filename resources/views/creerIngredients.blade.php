@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color:#F7E9B6 ">
                    <h1>Créer un Ingrédient</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('enregistrerIngredients') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="Nom_ingredient" class="form-label">Nom Produit</label>
                            <input type="text" name="Nom_ingredient" id="Nom_ingredient" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Date_Achat" class="form-label">Date d'achat</label>
                            <input type="datetime-local" name="Date_Achat" id="Date_Achat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Quantité" class="form-label">Quantité</label>
                            <input type="number" name="Quantité" id="Quantité" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Fournisseur" class="form-label">Fournisseur</label>
                            <select name="Fournisseur" id="Fournisseur" class="form-select" required>
                                @foreach($fournisseurs as $fournisseur)
                                    <option value="{{ $fournisseur->id }}">{{ $fournisseur->Nom }} {{ $fournisseur->Prenom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-orange">Créer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
