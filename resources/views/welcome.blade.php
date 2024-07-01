<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
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
        .btn2  {
            background-color: white;
            color: #FC5C65;
            border: 0.2vh solid #FC5C65;
            padding: 1.5vh 2vh; 
            border-radius: 1vh;
            margin-left: 4vh;
        }
        .btn2:hover{
            background:none
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
        h1 {
            font-size: 18vh; 
        }
        .custom-caption {
            text-align: left;
            padding-bottom: 10vh; 
        }
        .card-text, p, .card-title {
            text-align: left;
        }
        .btn-primary {
            background-color: #FC5C65;
            border: none;
            color: white;
            padding: 0.5vh 1.5vh;
            border-radius: 2vh;
            text-align: right; 
        }
        .card {
            margin-bottom: 3vh;
        }
        h2 {
            margin-left: 12vh; 
            margin-top: 11vh; 
            margin-bottom: 8vh; 
            padding-top:6vh
        }
        .btn4 button {
            background-color: white;
            color: #FC5C65;
            border: 0.2vh solid #FC5C65;
            padding: 1.5vh 2vh; 
            border-radius: 1vh;
            margin-left: 82vh;
            margin-bottom: 5vh
        }
        .container1 {
            background-image: url('img/background2.png');
            background-size: cover;
        }
        .box1 {
            background-color: #FC5C65;
            padding: 40vh
        }
        .caisse1 {
            display: flex;
            gap: 5vh
        }
        .caisse1 div {
            margin-bottom: 4vh
        }
        footer {
            background-color: #FC5C65;
            padding: 25px 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            border-top: 1px solid #ddd;
            color:white
        }

        .footer-section {
            text-align: center;
        }

        .footer-section p {
            margin: 5px 0;
        }

        .footer-section strong {
            font-weight: bold;
        }

        .newsletter-form input[type="email"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .newsletter-form button {
            padding: 10px 20px;
            background-color: white;
            color: #FC5C65;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
        .container3{
            display:flex;
            justify-content:space-around
        }
        .contenu p{
            width:90vh
        }

        .card-button:hover {
            box-shadow: 0 6px 8px rgba(66, 153, 225, 0.4);
        }

        .card-button:focus, .card-button:active {
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
       

        /* @media (max-width: 768px) {
            h1 {
                font-size: 10vh;
            }

            h2 {
                font-size: 3vh;
                margin-left: 3vh; 
            }

            .carousel-item {
                height: 50vh; 
            }

            .custom-caption p, .custom-caption h1 {
                font-size: 2vh;
            }

            .btn3 button, .btn4 button {
                padding: 1vh;
                font-size: 2vh;
            }

            footer {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            
        } */
    </style>
</head>
<body>

    <header>
        <nav>
            <div class="logo"><img src="{{ asset('img/logo.png') }}" width="auto" height="60"></div>
            <div class="group-btn">
                <a href="#" class="btn1"><button>Se connecter</button></a>
                <select name="" id="" class="btn2">
                <a href=""><option  default value>S'inscrire</option></a> 
                   <a href="/"><option value="">Association</option></a> 
                   <a href=""><option value="">Participant</option></a> 
                </select>
            </div>
        </nav>
    </header>

    <div class="content">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/background1.jpg') }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block custom-caption">
                        <p>23 Juillet 2024</p>
                        <h1>Concours de Slam</h1>
                        <p><a href="#" class="btn3"><button>Voir plus</button></a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/graduation.png') }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block custom-caption">
                        <p>25 Juillet 2024</p>
                        <h1>Journée portes ouvertes</h1>
                        <p><a href="#" class="btn3"><button>Voir plus</button></a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/tedtalk.jpg') }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block custom-caption">
                        <p>26 Juillet 2024</p>
                        <h1>TED <br> Talks</h1>
                        <p><a href="#" class="btn3"><button>Voir plus</button></a></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div>
        <h2>Services</h2>
    <div class="container3">
        <div>
        <div class="caisse1">
            <div> <img src="{{ asset('img/img1.png') }}" alt=""></div>
            <div> <img src="{{ asset('img/img2.png') }}" alt=""></div>
        </div>
        <div class="caisse1">
            <div> <img src="{{ asset('img/img3.png') }}" alt=""></div>
            <div> <img src="{{ asset('img/img4.png') }}" alt=""></div>
        </div>
        </div>
        <div>
           <div class="contenu">
          <h3>Lorem</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Vivamus lacinia odio vitae vestibulum vestibulum. Cras 
             venenatis euismod malesuada. Integer sagittis, metus in 
             accumsan hendrerit, justo sapien sollicitudin libero, a 
             dapibus nisi risus in ante. Sed do eiusmod tempor incididunt 
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
             quis nostrud exercitation ullamco laboris nisi ut aliqu</p>
           </div>
           <div class="contenu">
          <h3>Lorem</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Vivamus lacinia odio vitae vestibulum vestibulum. Cras 
             venenatis euismod malesuada. Integer sagittis, metus in 
             accumsan hendrerit, justo sapien sollicitudin libero, a 
             dapibus nisi risus in ante. Sed do eiusmod tempor incididunt 
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
             quis nostrud exercitation ullamco laboris nisi ut aliqu</p>
           </div>
           <div class="contenu">
          <h3>Lorem</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
             Vivamus lacinia odio vitae vestibulum vestibulum. Cras 
             venenatis euismod malesuada. Integer sagittis, metus in 
             accumsan hendrerit, justo sapien sollicitudin libero, a 
             dapibus nisi risus in ante. Sed do eiusmod tempor incididunt 
             ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
             quis nostrud exercitation ullamco laboris nisi ut aliqu</p>
           </div>
        </div>
    </div>

    <div class="container1">
        <h2>Événements récents</h2>
        @foreach($evennements as $evennement)
    <div class="cards-container">
        <div class="card">
        <div class="card-image" style="background: url('{{$evennement->image}}') no-repeat center center/cover;"></div>
            <div class="card-content">
                <h5 class="card-title">{{$evennement->nom}}</h5>
                <h6>{{$evennement->date}}</h6>
                <p class="card-text">{{$evennement->lieu}}</p>
                <p>Nombre de places disponibles: 100</p>
            </div>
            <div class="card-actions">
                <button type="button" class="card-button">Voir plus</button>
            </div>
        </div>
    </div>
    <a href="#" class="btn4"><button>Voir tous les événements</button></a>
@endforeach

    </div>
    <div class="coordonnee">
      <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15435.500681553951!2d-17.489517512841825!3d14.719648700000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173b9452a5ad5%3A0xb798e476c4492163!2sFabrique%20Simplon%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2ssn!4v1719492633010!5m2!1sfr!2ssn" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
    <footer>
        <div class="footer-section">
            <img src="{{ asset('img/logo.png') }}" width="auto" height="60">
        </div>
        <div class="footer-section">
            <p><strong>Contactez-nous:</strong> <br> Email: contact@example.com <br> Téléphone:33-200-30-30</p>
        </div>
        <div class="footer-section">
            <p><strong>Suivez-nous sur:</strong></p>
            <p>Facebook | Twitter | Instagram</p>
        </div>
        <div class="footer-section">
            <p><strong>Soyez au courant de tous les événements:</strong></p>
            <form class="newsletter-form" action="/subscribe" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Souscrire</button>
            </form>
        </div>
    </footer>

</body>
</html>
