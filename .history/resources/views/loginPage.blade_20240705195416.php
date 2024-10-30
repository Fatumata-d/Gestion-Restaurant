@extends('layout')

@section('content')

    <h1>Se Connecter</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('selectionnerPlats') }}" method="POST"></form>
        </div>
    </div>

@endsection