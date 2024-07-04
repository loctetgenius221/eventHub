<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Validé</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            padding: 10px;
            background-color: #ff5e5e;
            color: white;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
            color: #343a40;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f8f8f8;
            color: #888;
            border-radius: 0 0 8px 8px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #ff5e5e;
            color: white;
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
        <div class="header">
            <h1>Votre compte a été validé</h1>
        </div>
        <div class="content">
            <p>Bonjour <strong>{{ $association->user->name }}</strong>,</p>
            <p>Votre compte pour l'association <strong>"{{ $association->user->name }}"</strong> a été validé par l'administrateur.</p>
            <div class="panel">
                <p>Merci de votre inscription et bienvenue parmi nous !</p>
            </div>
            <a href="https://example.com/login" class="button">Se connecter</a>
            <p>Cordialement,<br>{{ config('app.name') }}</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
        </div>
    </div>
</body>
</html>
