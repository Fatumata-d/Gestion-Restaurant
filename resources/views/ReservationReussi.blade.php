@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card mb-3" style="max-width: 1300px;border-color: transparent;">
        <div class="card-body">
            <h2 class="card-title text-success"><i class="fas fa-check-circle"></i> Reservation Réussie</h2>
            <p class="card-text mt-3">Merci, Votre réservation a été reçue et sera traitée!</p><br>
            <div class="text-center">
                <a href="{{ route('welcome') }}" class="card-link">Retour à l'accueil</a>
            </div>
            
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br><br>
@endsection
