@extends('layout')

@section('content')
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajouter Une Responsabilité</title>
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="background-color:white; text-align:center">
                            <h3>Nouveau Poste!</h3>
                        </div>
                        <div class="card-body">
                            <form  action="{{ route('Creationrespon') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="Nom_Responsabilité" class="form-label">Nom_Responsabilité:</label>
                                    <input type="text" name="Nom_Responsabilité" id="Nom_Responsabilité" class="form-control" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-orange">Enregistrer</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection