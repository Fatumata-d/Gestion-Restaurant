
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
</head>
<body>
    
</body>
</html>
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
@endsection
