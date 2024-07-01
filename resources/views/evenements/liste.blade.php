<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des événements</title>
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
            margin-left: 65vh;
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
            background: url('https://img.freepik.com/vecteurs-libre/illustration-celebration-journee-afrique-plate_23-2149367532.jpg?t=st=1719684128~exp=1719687728~hmac=9ab93157dabfedd2b5307cc8785ccf9a6bf950b6108a1f657ac69a6f5f40ce9b&w=740') no-repeat center center/cover;
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
</body>
</html>