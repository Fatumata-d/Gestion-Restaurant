@extends('layout')

@section('title', 'Accueil')

@section('content')

    <div class="card mb-3" style="max-width: 1300px;border-color: transparent;background-color:#F7F4EC;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="{{ asset('sushi.jpg') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body" style="background-color:white;">
                <h1 class="card-title">BIENVENUE A SO SUSHI</h1>
                <p class="card-text">UN RESTAURANT CHINOIS MODERNE POUR DECOUVRIR L'ART DE LA CUISINE JAPONAISE.<br>VENEZ COMMANDER VOS PLATS<br>RESERVER A L'AVANCE VOS TABLES<br>PROFITER EN FAMILLE AMIS OU EN AMOUREUX.<br>ET TOUT A UN PRIX ABORDABLE!<br>VOUS VOUS SENTIREZ A L'AISE ET DETENDU</p>
            </div>
            <br>
            <div class="card-body text-center">
                <a href="{{ route('formulaire1') }}" class="card-link">COMMANDER</a>
                <a href="{{ route('formulaire2') }}" class="card-link">RESERVER</a>
            </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="card mb-3" style="max-width: 1000px; border-color: transparent;">
        <div class="row g-0" >
            <div class="col-md-4">
            <img src="{{ asset('un.jpg') }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body" style="background-color:white;"> 
                <h5 class="card-title">A PROPOS</h5>
                <p class="card-text">So Sushi est un restaurant japonais situé dans la capitale de Dakar non loin du Port Autonome de Dakar.<br>
                    Il réputé pour ses spécialités de sushi et autres plats japonais speciales.So Sushi offre une expérience culinaire raffinée et unique.<br>
                    Le menu de So Sushi est riche et varié, proposant une vaste gamme de sushis, sashimis, makis, et autres spécialités japonaises.<br>
                    So Sushi est bien plus qu'un simple restaurant de sushi. <br>
                    C'est une destination gastronomique où la tradition japonaise rencontre la créativité moderne, offrant une expérience culinaire mémorable pour tous les amateurs de cuisine japonaise.<br>
                    Donc qu'attendez vous pour venir deguster nos merveilleuux plats?
                </p>
            </div>
            <div class="card-body text-center" style="background-color:white;">
                <a href="{{ route('menu') }}" class="btn btn-custom">VOIR MENU</a>
            </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container" style="text-align:center;">
        <h4>NOTRE SELECTION DE PLATS GOURMANDS</h4>
    </div>
    <br>
    <br>
    


    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card custom-card">
                    <img src="{{ asset('1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sashimi saumon</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card custom-card">
                    <img src="{{ asset('2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Spicy Salmon</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card custom-card">
                    <img src="{{ asset('3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nigiri - Sashimis</h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card custom-card">
                    <img src="{{ asset('4.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sashimis</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card custom-card">
                    <img src="{{ asset('5.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sushis</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card custom-card">
                    <img src="{{ asset('6.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tiger Roll</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <br>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    

@endsection
