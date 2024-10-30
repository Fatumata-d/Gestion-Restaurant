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
                            <h3>Nouvelle Responsabilité!</h3>
                        </div>
                        <div class="card-body">
                            <form  action="{{ route('Creationrespon') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="Nom_Responsabilité" class="form-label">Nom_Responsabilité:</label>
                                    <input type="text" name="Nom_Responsabilité" id="Nom_Responsabilité" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Prenom" class="form-label">Prénom:</label>
                                    <input type="text" name="Prenom" id="Prenom" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Téléphone" class="form-label">Téléphone:</label>
                                    <input type="text" name="Téléphone" id="Téléphone" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email:</label>
                                    <input type="email" name="Email" id="Email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Adresse" class="form-label">Adresse:</label>
                                    <input type="text" name="Adresse" id="Adresse" class="form-control" required>
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

        <!-- Inclure Bootstrap JS depuis jsDelivr CDN -->
    </body>
    </html>
@endsection