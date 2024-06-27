<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - The Event Hub</title>
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side connexion">
        </div>
        <div class="right-side">
            <div class="logo">
                <img src="{{ asset('img/auth/logo-evenhub.png')}}" alt="The Event Hub">
            </div>
            <h2>Connexion</h2>
            <form>
                <input type="text" placeholder="Prénom et nom">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Mot de passe">
                <button type="submit">Se connecter</button>
            </form>
            <p>Vous n'avez pas de compte ? <a href="#">Inscrivez-vous</a></p>
        </div>
    </div>
</body>
</html>
