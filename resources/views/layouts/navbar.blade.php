<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

    @yield('content')

</body>
</html>
