<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les événements</title>
    <style>
        .search-container {
            /* border: 2px solid #007bff; */
            padding: 1rem;
            border-radius: 8px;
            background-color: #f8f9fa;
            margin-top: 7vh;
            width: 160vh;
            margin-left: auto;
            margin-right: auto;
            margin-bottom:7vh
        }

        .search-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 8vh;
            color:#FC5C65
        }
        a{
            text-decoration:none
        }

        .search-input {
            border: 1px solid #ced4da;
            padding: 0.375rem 0.75rem;
            border-radius: 0.25rem;
            width: 100%;
            margin-bottom: 10px;
        }

        .search-row {
            display: flex;
            gap: 13vh;
            justify-content: space-between;
        }

        .search-item {
            flex: 1;
        }

        .search-item input {
            width: 90%;
            margin-top:1vh
        }

         nav {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2vh;
        }

        .btn1 button {
            background-color: #FC5C65;
            color: white;
            border: none;
            padding: 1.5vh;
            border-radius: 1vh;
        }

        .btn2 button {
            background-color: white;
            color: #FC5C65;
            border: 0.2vh solid #FC5C65;
            padding: 1.5vh 2vh;
            border-radius: 1vh;
            margin-left: 4vh;
        }

        .logo {
            margin-left: 20vh;
        }

        .group-btn {
            margin-right: 8vh;
        }

        header {
            margin-top: 3vh;
            margin-bottom: 2vh;
        }

        .btn3 button {
            background-color: #FC5C65;
            color: white;
            border: none;
            padding: 1.5vh;
            border-radius: 1vh;
        }

        .cards-container {
    display: flex;
    flex-wrap: wrap; /* Permet aux cartes de passer à la ligne suivante */
    gap: 1rem; /* Espace entre les cartes */
    justify-content: center; /* Aligne les cartes au centre */
}

.card {
    flex: 1 1 30%; /* Permet aux cartes de s'ajuster à la taille de l'écran */
    max-width: 24%; /* Limite la largeur maximale des cartes pour qu'il y en ait 3 par ligne */
    margin: 1rem; /* Espace autour des cartes */
}

        .card-image {
            height: 10rem;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-title {
            margin-bottom: 0.5rem;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .card-text {
            font-size: 1rem;
            font-weight: 300;
            line-height: 1.75;
        }

        .card-actions {
            padding: 1.5rem;
            padding-top: 0;
        }

        .card-button {
            background-color: white;
            color: #FC5C65;
            border: 0.2vh solid #FC5C65;
            padding: 1.5vh 2vh;
            border-radius: 1vh;
            margin-bottom: 5vh;
            cursor: pointer;
        }

        .card-button:hover {
            box-shadow: 0 6px 8px rgba(66, 153, 225, 0.4);
        }

        .card-button:focus,
        .card-button:active {
            opacity: 0.85;
            box-shadow: none;
        }

        .carousel-item {
            height: 90vh;
        }

        .card-button:disabled {
            pointer-events: none;
            opacity: 0.5;
            box-shadow: none;
        }
        footer {
            background-color: #FC5C65;
            padding: 2vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        footer .footer-section {
            margin: 1vh;
        }

        footer .footer-section p {
            margin: 0;
            color: white;
        }

        footer .footer-section img {
            height: 60px;
        }

    </style>
</head>
<body>
<header>
        <nav>
            <div class="logo"><img src="{{ asset('img/logo.png') }}" width="auto" height="60"></div>
            <div class="group-btn">
 <a href="{{ route('login') }}" class="btn1"><button>Se connecter</button></a>
                <a href="#" class="btn2"><button>S'inscrire</button></a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="search-container">
            <div class="search-header">Rechercher un événement</div>
            <div class="search-row">
                <div class="search-item">
                    <label for="event-name">Événement</label>
                    <input type="text" id="event-name" class="search-input" placeholder="Nom de l'événement">
                </div>
                <div class="search-item">
                    <label for="event-date">Date</label>
                    <input type="text" id="event-date" class="search-input" placeholder="Date">
                </div>
                <div class="search-item">
                    <label for="event-location">Lieu</label>
                    <input type="text" id="event-location" class="search-input" placeholder="Lieu">
                </div>
            </div>
        </div>
    </div>
<div class="cards-container">
            @foreach($evennements as $evennement)
            <div class="card">
            <div class="card-image">
            <img src="{{ asset('storage/blog/'.$evennement->image )}}" alt="{{ $evennement->nom }}" style="object-fit: cover; width: 100%; height: 100%;">
          </div>
                <div class="card-content">
                    <h5 class="card-title">{{$evennement->nom}}</h5>
                    <p class="card-text">
                        {{$evennement->lieu}}
                    </p>
                    <p class="card-text">
                        {{$evennement->date}}
                    </p>
                </div>
                <div class="card-actions">
                <a href="{{ route('evennement.detail', $evennement->id) }}" type="button" class="card-button">Voir plus</a>
                </div>
            </div>
            @endforeach
        </div>
        <footer>
        <div class="footer-section">
            <img src="{{ asset('img/logo.png') }}" width="auto" height="60">
        </div>
        <div class="footer-section">
        <p>Contacter-nous: <br> Email: contact@example.com <br> Téléphone: +221 33 200 10 10</p>
        </div>
        <div class="footer-section">
            <p>Suivez-nous:</p>
            <p>Facebook | Twitter | Instagram</p>
        </div>
    </footer>
</body>
</html>