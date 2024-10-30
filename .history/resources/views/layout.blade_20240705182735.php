<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Restaurant Sushi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color:#FDFAF5;
        
        }
        .footer {
            background-color: #F06337;
            color: #f8f9fa;
            padding: 12px 0;
            text-align: center;
            border-top: 3px solid #F06337;
            margin-top: 15px;
            font-weight: bold;
        }
        .navbar-nav {
            flex-direction: row;
        }
        .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem;
            color: black;
            font-size: 1.1rem;  
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #E95F22;
            font-weight: bold;
        }

        .card-link {
            color: white;
            background-color: #E95F22;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            font-weight: bold;
            
        }
        .card-link:hover {
            background-color: #EC8D57 ;
        }
        .card {
            border-color: #E95F22;
            margin: 0 auto; 
            float: none; 
            box-shadow: 0 12px 10px #F9D8AF;

        }
        .card-body .card-title,
        .card-body .card-text {
            text-align: center;
            font-weight: bold;
        }
        .card-body .card-title {
            font-size: 1.5rem; 
        }
        .card-body .card-text {
            font-size: 1.2rem; 
        }
        .btn-custom {
        background-color: #C63622 ;
        color: white;
        border-color: #EC6957;
        font-weight: bold;
        }
        .btn-custom:hover {
        background-color: #d45c4d;
        border-color: #d45c4d;
        }
        .custom-card {
        border: 1px solid transparent; /* Bordure transparente */
        border-radius: 10px; /* Coins arrondis */
        }

        .card-header {
        background-color: #E6E7FB; /* Couleur de fond similaire à bg-dark */
        color: black; 
        text-align: center;
        font-weight: bold;
        
        }
        .card-body {
        background-color:#FDFAF5; 
        
        }

        .btn-orange {
                background-color: #E3700A ;
                color: white;
                text-align: center;
                font-weight: bold;
        }
        .btn-orange:hover {
                background-color: #D3691E;
                color: white;
        }

        .custom-table-header {
            background-color: #E9BA54 ;
            color: black;
            text-align: center;
            font-weight: bold;
        }
        .custom-list-group-item {
        background-color: #FCF1E9; /* Couleur de fond des éléments de la liste */
        border: 1px solid #dee2e6; /* Bordure des éléments de la liste */
        font-weight: bold;
        }  

        .custom-border {
        border: 2px solid #E37A27; /* Bordure de 2px de large en couleur #E37A27 */
        padding: 25px; /* Ajoute un remplissage intérieur pour plus d'espace */
        border-radius: 15px; /* Arrondit les coins de la bordure */
        background-color:#F5CC8F ;
        }
        .rounded-circle {
            border-top: 6px solid #F06337;
        }
        
        .sushi-image {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .sushi-image.visible {
            opacity: 1;
        }

        .icon-circle {
            display: inline-block;
            width: 30px; /* Ajustez la taille selon vos besoins */
            height: 30px; /* Ajustez la taille selon vos besoins */
            line-height: 26px; /* Ajustez la ligne selon vos besoins */
            border-radius: 50%;
            background-color:white; /* Couleur de fond du cercle */
           
        }

        .icon-circle .fa {
            vertical-align: middle;
            color: #000; 
        }


    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center py-3">
            <div class="col-md-2 text-center text-md-start">
                <img src="{{ asset('logo.jpg') }}" alt="SO SUSHI" width="125" class="rounded-circle">
            </div>
            <div class="col-md-10">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('welcome') ? 'active' : '' }}"  href="{{ route('welcome') }}">Accueil</a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Menu</a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('infos') ? 'active' : '' }}" href="{{ route('infos') }}">Infos</a>
                            </li>
                            <br>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('tableau_de_bord') ? 'active' : '' }}" href="{{ route('tableau_de_bord') }}">Tableau de bord</a>
                            </li>
                                <br>
                                <br>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::routeIs('adminDashboard') ? 'active' : '' }}" href="{{ route('adminDashboard') }}">
                                    <div class="icon-circle"><i class="fa fa-user"></i></div>
                                </a>
                            </li>

                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <div class="footer">
        <p>&copy; copyright 2024 Restaurant SO SUSHI. Tous droits réservés.</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/sosushidakar?igsh=MWVjdWF3MWx1Nmh2aw=="  style="color:black; font-size: 1.1em;"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Inclure Bootstrap JS depuis jsDelivr CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js" integrity="sha256-sw0iNNXmOJbQhYFuC9OF2kOlD5KQKe1y5lfBn4C9Sjg=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('.nav-link').click(function() {
                $(this).css('color', '#E95F22');
                $(this).css('font-weight', 'bold');
            });
            $('.nav-item').css('margin-bottom', '10px');
        });
    </script>
</body>
</html>
