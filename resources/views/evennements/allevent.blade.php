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
            margin-top: 20px;
            width: 160vh;
            margin-left: auto;
            margin-right: auto;
            margin-bottom:3vh
        }

        .search-header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 8vh;
            color:#FC5C65
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
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            justify-items: center;
            padding: 1rem;
        }

        .card {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 20rem;
            border-radius: 1rem;
            background-color: #FC5C65;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 1rem;
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
                    <a href="evennement/detail/{{ $evennement->id }}"type="button" class="card-button">Voir plus</a>
                </div>
            </div>
            @endforeach
        </div>
</body>
</html>