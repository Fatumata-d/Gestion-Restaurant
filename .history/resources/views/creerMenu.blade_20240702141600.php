@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color:#F7E9B6 ">
                    <h1>Créer un nouveau menu</h1>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('menuValider') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="Nom_Menu" class="form-label">Nom du Menu:</label>
                            <input type="text" name="Nom_Menu" id="Nom_Menu" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="Createur" class="form-label">Créateur:</label>
                            <input type="text" name="Createur" id="Createur" class="form-control" value="{{ $Createur }}" readonly>
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
