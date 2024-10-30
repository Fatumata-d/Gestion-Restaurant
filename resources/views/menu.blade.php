@extends('layout')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">MENU</h1>
        <br>
        <div class="card-header text-center" style="background-color:#FDFAF5;">
            <div class="container-fluid">
                <img src="{{ asset('Nigiri.jpg') }}" class="rounded-circle me-2 sushi-image" alt="Image1" style="width: 170px; height: 170px;">
                <img src="{{ asset('Sushi2.jpg') }}" class="rounded-circle me-2 sushi-image" alt="Image1" style="width: 170px; height: 170px;">
                <img src="{{ asset('Tataki.jpg') }}" class="rounded-circle me-2 sushi-image" alt="Image1" style="width: 170px; height: 170px;">
                <img src="{{ asset('Maki black.jpg') }}" class="rounded-circle me-2 sushi-image" alt="Image1" style="width: 170px; height: 170px;">
                <img src="{{ asset('Sashimi.jpg') }}" class="rounded-circle me-2 sushi-image" alt="Image1" style="width: 170px; height: 170px;">
                <img src="{{ asset('Yakitori.jpg') }}" class="rounded-circle me-2 sushi-image" alt="Image1" style="width: 170px; height: 170px;">
            </div>
        </div>


        <br>
        <br>
        <form action="{{ route('selectionnerPlats') }}" method="POST">
            @csrf
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($menus as $menu)
                    <div class="col">
                        <div class="card">
                            <div class="card-body" style="background-color: #F7BE7B ">
                                <h2 class="card-title">{{ $menu->Nom_Menu }}</h2>
                                <ul class="list-group list-group-flush">
                                    @foreach($menu->plat as $plat)
                                        <li class="list-group-item">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="plat[]" id="plat_{{ $plat->id }}" value="{{ $plat->id }}">
                                                <label class="form-check-label" for="plat_{{ $plat->id }}">
                                                    {{ $plat->Nom_Plat }} - {{ $plat->Prix }} FCFA
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-3">
                <form action="{{ route('selectionnerPlats') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-orange">Suivant</button>
                </form>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.sushi-image').each(function(index) {
                $(this).delay(index * 500).queue(function(next) {
                    $(this).addClass('visible');
                    next();
                });
            });
        });
    </script>
@endsection
