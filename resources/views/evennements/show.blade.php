
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>
      <style type="text/tailwindcss">
        @layer utilities {
          .content-auto {
            content-visibility: auto;
          }
        }
      </style>
    <title>EventHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    :root {
        --primary-color: #FC5C65;
        --secondary-color: #74C0FC;
        --background-color: #f9f9f9;
        --text-color: #333;
        --shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    body {
    display: flex;
    margin: 0;
    font-family: Arial, sans-serif;
}
.sidebar {
    width: 240px;
    background-color: #fff;
    padding: 0px;
    height: 100vh;
    overflow-y: auto;
}

.logo-container {
    text-align: center;
    margin-bottom: 20px;
}

.logo {
    width: 100px;
    height: auto;
}

nav ul {
    list-style: none;
    /* padding: 0; */
}

nav ul li {
    margin-bottom: 10px;
}

nav ul li a {
    text-decoration: none;
    color: #FC5C65;
    padding: 10px;
    display: block;
    width: 100%;
    padding-right: 
}
nav ul li a:hover {
    background-color: #FC5C65;
    color: white;
    border-radius: 15px 0 0 15px;
}
/* main-container */
.main-content {
    flex-grow: 1;
    padding: 0px;
    background-color: #f9f9f9;
    overflow-y: auto;
}

header {
    background-color: #FC5C65;
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    
}

.welcome-message {
    font-size: 16px;
}

.profile-icon {
    width: 40px;
    height: 40px;
    background-color: white;
    border-radius: 50%;
}

.form-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    margin: 20px;
    max-width: 100%;
}

h2 {
    margin-top: 0;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
}

.form-group input, .form-group textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #FC5C65;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* le css des cards et leur container */
.card-container{
    /* flex-grow: 1; */
    padding: 20px;
    background-color: #f9f9f9;
}
.card{
    /* margin-top: 100px; */
}
.text-dashbord{
    color: #FC5C65;
}
.text-dashbord:hover{
    color: #FC5C65;
}
header{
    width: 100%
}

.card-event{
    width: 300px;
    height: auto;
    background-color: #fff;
    border-radius: 15px;
    margin: 20px;
}
.nbr-de_place{
    width: 100%;
    justify-content: end;
    background-color: #FC5C65;
    color: #fff;
}
.card-img-events{
    width:100%;
    height:179px;
    border-radius: 15px 15px 0px 0px;
    margin: 0%;
}
.cards-body{
    padding: 20px;
}

.responsive-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.form-control {
    border: 2px solid #FC5C65;
    border-radius: 4px;
    padding: 10px;
    transition: border-color 0.3s ease;
}
.card-img-events-detail{
    width: 100%;
    height: 288px;
}
.form-container-detail{
    background-color: white;
    padding: 0px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 30px;
    max-width: 100%;
}
.body-card-detail{
    padding: 30px;
}
.body-card-detail h2{
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: bold;
}
.container-programme{
    display: flex;
    margin-top: 20px;
    justify-content: start;
    font-size: 14px;
}
.container-programme div{
   margin-right: 60px;
}
.action {
    display: flex;
    justify-content: flex-end;
    gap: 15px; /* Ajoute un espace entre les icônes */
    margin-top: 20px;
}
.liste-inscrits {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: var(--shadow);
}
.event-card {
width: calc(100% - 50px); /* 100% de largeur moins les marges */
margin: 20px auto; /* centrer les cartes */
background-color: white;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
overflow: hidden; /* pour que l'image ne dépasse pas */
}
nav ul li a.active {
    background-color: #FC5C65;
    color: white;
    border-radius: 15px 0 0 15px;
}
.event-meta {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.event-meta p {
    margin: 0;
}
.header .menu-toggle {
    display: none;
}
/* les crans mobile */
@media (max-width: 768px) {
        .sidebar {
            display: none;
            transform: translateX(-100%);
        }
        .main-content {
            margin-left: 0;
        }
        .menu-toggle {
            display: block;
            background-color: #FC5C65;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .welcome-message{
            text-align: center;
        }
        .col-md-4,
        .col-md-12,
        .col-12,
        .col-4,
        .col-md-2,
        .col-2 {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .button {
        width: 100%;
        margin-top: 50px;
    }
    .responsive-flex {
        display: block;
         /* width: 100%; */
    }
.form-container h2{
    font-size: 16px;
}
.sidebar {
        transform: translateX(-100%);
    }
    .sidebar.active {
        transform: translateX(0);
    }
    .main-content {
        margin-left: 0;
    }
    .header .menu-toggle {
        display: block;
    }
    }
</style>
<body>
    <div class="sidebar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo" class="logo">
        </div>
        <nav class="text-dashbord">
            <ul >
                <li><a href="#">Tableau de bord</a></li>
                <li><a href="#">Profil</a></li>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <header class="header">
            <button class="menu-toggle d-md-none"><i class="fas fa-bars"></i></button>
            <div class="welcome-message">SIMPLON</div>
            <div class="profile-icon"></div>
        </header>
            <div class="form-container-detail">
                <div class="container mt-5" >
                <img src="https://img.freepik.com/psd-gratuit/publication-reseaux-sociaux-du-flyer-du-club-dj-party_505751-4119.jpg?uid=R147170837&ga=GA1.1.2034080354.1716549514&semt=sph" class="card-img-events-detail" alt="...">
                <div class="body-card-detail">
                    <h1>{{$evennement->nom}}</h1>
                <div class="event-meta">
                    <p><i class="fas fa-calendar"></i> Date : {{$evennement->date}}</p>
                    <p><i class="fas fa-clock"></i> Heure : 14:00 - 17:00</p>
                    <p><i class="fas fa-map-marker-alt"></i> Lieu : {{$evennement->lieu}}</p>
                </div>
                <p>{{$evennement->description}}</p>
                        <div class="action">
                            <a href="{{ route('evennements.edit', $evennement->id) }}"><i class="fa-solid fa-trash" style="color: #e01b24;"></i></a>
                            <a href=""><i class="fa-solid fa-pen" style="color: #74C0FC;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    
    <div class="liste-inscrits bg-blend-multiply mt-6 event-card">
        <h2>La liste des inscris à cet évennement</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>766149938</td>
                <td>Mark@gmail.com</td>
                <td><button class="btn btn-danger btn-sm">Supprimer</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>766149938</td>
                <td>jacob@gmail.com</td>
                <td><button class="btn btn-danger btn-sm">Supprimer</button></td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarLinks = document.querySelectorAll('.sidebar nav ul li a');
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    sidebarLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            sidebarLinks[0].classList.add('active');

            const menuToggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
