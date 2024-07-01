<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation</title>
    <link rel="stylesheet" href="{{ asset('css/participant/inscription.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Formulaire de réservation à l’événement</h1>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Prénom et nom" required>
                    <input type="text" name="phone" placeholder="Téléphone" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <button type="submit" class="submit-btn">Je m'inscris à l'événement</button>
            </form>
        </div>
        <div class="info-section">
            <img src="event-image.jpg" alt="Soirée Éblouissante">
            <div class="event-details">
                <h2>Soirée Éblouissante : Dîner Gala Annuel - Dakar</h2>
                <p>Jeudi, 23 Juillet à 20h</p>
            </div>
        </div>
    </div>
</body>
</html>
