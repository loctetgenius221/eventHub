<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation Acceptée</title>
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
        <div class="header">
            <h1>Réservation Acceptée</h1>
        </div>
        <div class="content">
            <p>Bonjour <strong>{{ $reservation->user->name }}</strong>,</p>
            <p>Votre réservation pour l'événement <strong>"{{ $reservation->evennement->nom }}"</strong> a été acceptée avec succès.</p>
            <div class="panel">
                <p>Merci de votre inscription et bienvenue parmi nous !</p>
            </div>
            <p>Cordialement,<br>{{ config('app.name') }}</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
        </div>
    </div>
</body>
</html>
