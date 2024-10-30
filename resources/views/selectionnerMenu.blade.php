@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color:#F7E9B6 ">
                    <h1>Associer un plat à un menu</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('associerMenu', ['plat_id' => $plat_id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="menu_id" class="form-label">Sélectionnez un Menu:</label>
                            <select name="menu_id" id="menu_id" class="form-select" required>
                                @foreach($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->Nom_Menu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-orange">Associer au Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
