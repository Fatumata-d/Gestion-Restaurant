@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#F7BE7B ">
                    <h1>Les Ingrédients ajoutés au stock!</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($ingredients as $ingredient)
                        <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color:#FFF7F3;font-weight:bold">
                                <span>{{ $ingredient->Nom_ingredient }}</span>
                                <button class="btn btn-danger btn-sm delete-btn" data-id="{{ $ingredient->id }}">Supprimer</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function () {
        $('.delete-btn').click(function () {
            if (confirm('Êtes-vous sûr de vouloir supprimer cet ingredient ?')) {
                var id = $(this).data('id');
                $.ajax({
                    url: '/ingredients/' + id,
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
    
</script>
@endsection
