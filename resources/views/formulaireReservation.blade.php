<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Réservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <style>
        .btn-orange {
            background-color: #E37A27;
            color: white;
        }
        .btn-orange:hover {
            background-color: #D3691E;
            color: white;
        }
        .card-header {
            background-color: #4B443B;
            color: white;
            text-align: center;
            font-weight: bold;
        }
        .card-body {
            background-color: #F7E9B6; /* Couleur de fond similaire à bg-dark */
            /* Couleur du texte similaire à text-white */
        }
        /* Style pour l'alerte */
        .alert-message {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            display: none;
        }

        #calendrier-disponibilite {
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        #calendrier-disponibilite .date-disponible {
            background-color: #C8E6C9;
            margin-bottom: 5px;
            padding: 5px;
            cursor: pointer;
        }
        #calendrier-disponibilite .date-indisponible {
            background-color: #FFCDD2;
            margin-bottom: 5px;
            padding: 5px;
            cursor: not-allowed;
        }

        
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
        
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Formulaire de Réservation</h2>
                    </div>
                    <div class="card-body">
                        <!-- Alert message -->
                        <div class="alert alert-danger alert-message" role="alert">
                            VEUILLEZ VERIFIER VOTRE RESERVATION AVANT DE SOUMETTRE!
                        </div>
                        
                        <form action="{{ route('validerReservation') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="Date_reservation" class="form-label">Date de Réservation:</label>
                                <input type="datetime-local" name="Date_reservation" id="Date_reservation" class="form-control"  required>
                            </div>
                            <div class="mb-3">
                                <label for="Type_Table" class="form-label">Sélectionnez un Type de Table :</label>
                                <select name="Type_Table" id="Type_Table" class="form-select">
                                    @foreach($types_tables as $type_table)
                                        <option value="{{ $type_table->id }}">{{ $type_table->TypeTable }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Emplacement_Table" class="form-label">Sélectionnez un Emplacement :</label>
                                <select name="Emplacement_Table" id="Emplacement_Table" class="form-select">
                                    @foreach($emplacements as $emplacement)
                                        <option value="{{ $emplacement->id }}">{{ $emplacement->EmplacementTable }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-orange">Réserver</button>
                                <button type="button" id="annulerCommande" class="btn btn-danger">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div id="calendrier-disponibilite">
                    <h4 class="text-center" style="color: red;">HEURES DE RESERVATION DISPONIBLE</h4>
                    <div class="date-disponible">Tous Les Jours à :</div>
                    <div class="date-disponible">8H - 22H</div>
                    <div class="date-indisponible">Tous Les Jours Sauf :</div>
                    <div class="date-indisponible">13H - 14H</div>
                </div>
            </div>
        </div>
        <br>
        <br>

        
    </div>

    <!-- Modal pour confirmation d'annulation -->
    <div class="modal fade" id="confirmationAnnulationModal" tabindex="-1" aria-labelledby="confirmationAnnulationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationAnnulationModalLabel">Annuler la réservation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir annuler la réservation ?
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
    <!-- Inclure jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Script jQuery pour gérer l'affichage de l'alerte -->
    <script>
        $(document).ready(function() {
            $('#annulerCommande').click(function() {
                $('#confirmationAnnulationModal').modal('show');
            });

            
            function afficherAlerte(message) {
                $('.alert-message').text(message).fadeIn();
                setTimeout(function() {
                    $('.alert-message').fadeOut();
                }, 6000); // Disparaît après 3 secondes (3000 millisecondes)
            }

            $('#Date_reservation').on('input', function() {
                afficherAlerte('VEUILLEZ VERIFIER VOTRE RESERVATION AVANT DE SOUMETTRE!');
            });
        });

        $(document).ready(function() {
            $('.sushi-image').each(function(index) {
                $(this).delay(index * 500).queue(function(next) {
                    $(this).addClass('visible');
                    next();
                });
            });
        });
    </script>
</body>
</html>
