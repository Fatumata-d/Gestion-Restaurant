<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <style>
        .btn-orange {
            background-color: #E37A27;
            color: white;
            font-weight:bold;
        }
        .btn-orange:hover {
            background-color: #D3691E;
            color: white;
        }
        .card-header {
            background-color:#4B443B; 
            color: white; 
            text-align: center;
            font-weight: bold;
        }
        .card-body {
            background-color: #F7E9B6;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>CONFIRMER VOTRE COMMANDE</h2>
                        <h5>Spécifiez les quantités !</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('CommandeEnregistrer') }}" method="POST">
                            @csrf
                            @foreach($plats as $plat)
                                <div class="mb-3">
                                    <label class="form-label">{{ $plat->Nom_Plat }} - {{ $plat->Prix }} FCFA</label>
                                    <input type="number" name="Quantité[{{ $plat->id }}]" class="form-control" min="1" required>
                                </div>
                            @endforeach
                            <div class="text-center">
                                <button type="submit" class="btn btn-orange">Confirmer</button>
                                <button type="button" id="modifiercommande" class="btn btn-success">Modifier</button>
                                <button type="button" id="annulerCommande" class="btn btn-danger">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationAnnulationModal" tabindex="-1" aria-labelledby="confirmationAnnulationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationAnnulationModalLabel">Annuler la commande</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir annuler la commande ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <a href="{{ route('welcome') }}" class="btn btn-orange">OK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JS depuis jsDelivr CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js" integrity="sha256-sw0iNNXmOJbQhYFuC9OF2kOlD5KQKe1y5lfBn4C9Sjg=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#annulerCommande').click(function() {
                $('#confirmationAnnulationModal').modal('show');
            });

            
            $('#modifiercommande').click(function() {
                window.location.href = "{{ route('menu') }}";
            });
        });
    </script>
</body>
</html>
