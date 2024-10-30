
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-header text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo du Restaurant" class="logo">
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

    <br>
    <br>
</body>
</html>
    

