@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color:#F7E9B6 ">
                    <h1>Ajouter un nouveau plat</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('platValider') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="Nom_Plat" class="form-label">Nom du Plat:</label>
                            <input type="text" name="Nom_Plat" id="Nom_Plat" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Prix" class="form-label">Prix:</label>
                            <input type="number" name="Prix" id="Prix" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-orange">Ajouter le Plat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
