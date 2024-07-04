<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #ff5e5e;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #ff5e5e;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .panel {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Votre compte a été validé</h1>
        <p>Bonjour <strong>{{ $association->user->name }}</strong>,</p>
        <p>Votre compte pour l'association <strong>"{{ $association->user->name }}"</strong> a été validé par l'administrateur.</p>
        <div class="panel">
            <p>Merci de votre inscription et bienvenue parmi nous !</p>
        </div>
        <a href="https://example.com/login" class="button">Se connecter</a>
        <p>Cordialement,<br>{{ config('app.name') }}</p>
    </div>
</body>
</html>
