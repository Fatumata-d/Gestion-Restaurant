@extends('layout')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">INFOS</h2>
        <br>

        <div class="row mt-4">
        
            <div class="col-md-6">
                <div class="card" style="background-color:#E94337 ">
                    <div class="card-body" style="background-color:#F7E9B6 ">
                        <h4 class="card-title">Frais de livraison</h4>
                        <ul class="list-unstyled">
                            <li>Centre-Ville : 1500 FCFA</li>
                            <li>Hors Centre Ville : 2000 FCFA</li>
                            <li>Banlieue : 2500 FCFA</li>
                            <li>Autre Région : 3000 FCFA</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="background-color:#F3D4A4  ">
                    <div class="card-body" style="background-color:#F7E9B6 ">
                        <h4 class="card-title">Heures d'ouvertures</h4>
                        <ul class="list-unstyled">
                            <li>Lundi-Jeudi : 08h-23h</li>
                            <li>Vendredi : 08h-13h / 14h30-23h</li>
                            <li>Samedi-Dimanche : 10h-23h</li>
                            <li>Pause : 13h-13h30</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card" style="background-color:#F3D4A4 ">
                    <div class="card-body" style="background-color:#F7E9B6 ">
                        <h4 class="card-title">Contacts</h4>
                        <ul class="list-unstyled">
                            <li>704749956</li>
                            <li>776593890</li>
                            <li>334567890</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="background-color: #F3D4A4 ">
                    <div class="card-body" style="background-color:#F7E9B6 ">
                        <h4 class="card-title">Adresse</h4>
                        <p>SENEGAL - DAKAR <br>Dakar Plateau derriere BIO 24 <br>Immeuble Goeland</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="card" style="background-color:#F3D4A4 ">
                    <div class="card-body" style="background-color:#F7E9B6 ">
                        <h4 class="card-title">Livraison</h4>
                        <p class="card-text">Seulement pendant les heures d'ouvertures</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
