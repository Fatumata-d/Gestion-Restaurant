
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .login-header {
            margin-bottom: 20px;
        }

        .login-header .logo {
            width: 100px; /* Ajustez la taille selon vos besoins */
            margin-bottom: 10px;
        }

        .login-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-orange {
            background-color: #E37A27;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-orange:hover {
            background-color: #D3691E;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .form-label {
            margin-bottom: 5px;
            font-weight: bold;
        }
</style>

</head>
<body>
    <div class="login-container">
        <div class="login-header text-center">
            <img src="{{ asset('logo.jpg') }}" alt="SO SUSHI" width="125" class="rounded-circle">
            <h1>Se Connecter</h1>
        </div>

        <div class="card login-card">
            <div class="card-body">
                <form action="{{ route('validerLogin') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Mot de Passe:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-orange">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.min.js" integrity="sha256-sw0iNNXmOJbQhYFuC9OF2kOlD5KQKe1y5lfBn4C9Sjg=" crossorigin="anonymous"></script>
</body>
</html>
    

