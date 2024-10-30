@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card mb-3" style="max-width: 1300px;border-color: transparent;">
        <div class="card-body">
            <h2 class="card-title text-success"><i class="fas fa-check-circle"></i> Commande Réussie</h2>
            <p class="card-text mt-3">Merci, Votre commande a été reçue et sera traitée dans les plus brefs délais !</p><br>
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
