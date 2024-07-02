@extends('layouts.navbar')

@section('', 'navbar')

@section('content')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soirée Éblouissante : Dîner Gala Annuel</title>
    <link rel="stylesheet" href="{{ asset('css/participant/detail.css') }}">

</head>
<body>

    <main>
        <section class="event-details">
            <img src="{{ asset('img/culture1.jpg') }}" alt="Event Image" class="event-image">
            <div class="event-info">
                <h1>Soirée Éblouissante : Dîner Gala Annuel - Dakar</h1>
                <p>Jeudi, 23 Juillet à 20h<br>L'événement dure 2 heures</p>
                <p>Organisé par Simplon</p>
                <div class="event-info-bottom">
                    <a href="#" class="btn1"><button>S'inscrire</button></a>
                    <p>Places disponibles : 50</p>
                </div>
            </div>
        </section>
        <section class="description">
            <h2>Description</h2>
            <p>
                Plongez dans une soirée d'élégance et de raffinement lors de notre Dîner Gala Annuel. À votre arrivée, profitez d'un cocktail de bienvenue avec des hors-d'œuvre raffinés, tout en échangeant avec des invités prestigieux. Savourez ensuite un dîner gastronomique préparé par un chef étoilé, avec des plats exquis et des vins soigneusement sélectionnés.
                La soirée sera ponctuée par des discours inspirants et des remises de prix célébrant les réalisations exceptionnelles de l'année. Entre chaque plat, des animations captivantes, comme des performances musicales et des spectacles artistiques, vous émerveilleront.
                Pour clôturer cette soirée mémorable, rejoignez-nous sur la piste de danse pour célébrer jusqu'au bout de la nuit avec un DJ renommé ou un orchestre live. Venez habillés en tenue de gala et vivez une soirée inoubliable dans un cadre somptueux.
            </p>
        </section>
        <section class="contact-location">
            <div class="contact">
                <h2>Contact</h2>
                <p>Email : Simplon@gmail.com</p>
                <p>Téléphone : 77-200-50-23 / 33-100-23-10</p>
            </div>
            <div class="location">
                <h2>Localisation de l'événement</h2>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7717.758462100638!2d-17.469698600000047!3d14.719419200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173b9452a5ad5%3A0xb798e476c4492163!2sFabrique%20Simplon%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2ssn!4v1719837635058!5m2!1sfr!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img src="{{ asset('img/logo.png') }}" width="auto" height="60">
        <p>Tous droits réservés ©2024 The EventHub</p>
    </footer>
</body>
</html>

@endsection
