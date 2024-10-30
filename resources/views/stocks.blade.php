@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4" style="text-align:center; font-weight:bold;">MOUVEMENT DES STOCKS</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">INGREDIENT</th>
                        <th scope="col">DATE DE MOUVEMENT</th>
                        <th scope="col">QUANTITE</th>
                        <th scope="col">TYPE DE MOUVEMENT</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mouvements as $mouvement)
                        <tr>
                            <td>{{ $mouvement->ingredients ? $mouvement->ingredients->Nom_ingredient : 'Ingrédient inconnu' }}</td>
                            <td>{{ $mouvement->Date_Mouvement }}</td>
                            <td>{{ $mouvement->Quantité }}</td>
                            <td>{{ $mouvement->Type_Mouvement ? 'Entrée' : 'Sortie' }}</td>
                            <td>
                                <button class="btn btn-success btn-sm modifier-btn" data-id="{{ $mouvement->id }}">Modifier</button>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $mouvement->id }}">Supprimer</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Modifier un Mouvement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Nom_ingredient" class="font-weight-bold">Ingrédient</label>
                            <input type="text" class="form-control" id="Nom_ingredient" name="Nom_ingredient" placeholder="Nom de l'ingrédient" required>
                        </div>
                        <div class="form-group">
                            <label for="Date_Mouvement" class="font-weight-bold">Date de Mouvement</label>
                            <input type="datetime-local" class="form-control" id="Date_Mouvement" name="Date_Mouvement" required>
                        </div>
                        <div class="form-group">
                            <label for="Quantité" class="font-weight-bold">Quantité</label>
                            <input type="number" class="form-control" id="Quantité" name="Quantité" placeholder="Quantité" required>
                        </div>
                        <div class="form-group">
                            <label for="Type_Mouvement" class="font-weight-bold">Type de Mouvement</label>
                            <select class="form-control" id="Type_Mouvement" name="Type_Mouvement" required>
                                <option value="1">Entrée</option>
                                <option value="0">Sortie</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Modifier</button>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.delete-btn').click(function () {
                if (confirm('Êtes-vous sûr de vouloir supprimer ce mouvement ?')) {
                    var id = $(this).data('id');
                    $.ajax({
                        url: '/mouvements/' + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            if (response.status === 'success') {
                                location.reload();
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function (response) {
                            alert('Erreur lors de la suppression.');
                        }
                    });
                }
            });
        });

        $('.modifier-btn').click(function () {
            var id = $(this).data('id');
            $.ajax({
                url: '/mouvements/' + id + '/modifier',
                type: 'GET',
                success: function (response) {
                    if (response.status === 'success') {
                        $('#Nom_ingredient').val(response.data.Nom_ingredient);
                        $('#Date_Mouvement').val(response.data.Date_Mouvement);
                        $('#Quantité').val(response.data.Quantité);
                        $('#Type_Mouvement').val(response.data.Type_Mouvement);
                        $('#editForm').attr('action', '/mouvements/' + id);
                        $('#editModal').modal('show');
                    } else {
                        alert(response.message);
                    }
                },
                error: function (response) {
                    alert('Erreur lors de la récupération des données.');
                }
            });
        });

        $('#editForm').submit(function (e) {
            e.preventDefault();
            var id = $(this).attr('action').split('/').pop();
            $.ajax({
                url: '/mouvements/' + id,
                type: 'PUT',
                data: $(this).serialize(),
                success: function (response) {
                    if (response.status === 'success') {
                        location.reload();
                    } else {
                        alert(response.message);
                    }
                },
                error: function (response) {
                    alert('Erreur lors de la mise à jour.');
                }
            });
        });
    
    </script>
@endsection
