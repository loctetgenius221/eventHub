
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EventHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
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
    justify-content: space-around;
    font-size: 14px;
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
            <div class="welcome-message">SIMPLON</div>
            <div class="profile-icon"></div>
        </header>
            <div class="form-container-detail">
                <div class="container mt-5" >
                <img src="https://img.freepik.com/psd-gratuit/publication-reseaux-sociaux-du-flyer-du-club-dj-party_505751-4119.jpg?uid=R147170837&ga=GA1.1.2034080354.1716549514&semt=sph" class="card-img-events-detail" alt="...">
                <div class="body-card-detail">
                <h2>Dakar - Gestion du temps et productivité</h2>
                <p>Ce séminaire vous offre des outils pratiques et des stratégies éprouvées pour optimiser votre emploi du temps, réduire le stress lié à la surcharge de travail, et améliorer votre productivité de manière significative.</p>
                <div class="container-programme">
                        <div>
                            <p>Date : 15 Juillet</p>
                            <p>Date : 15 Juillet</p>
                        </div>
                        <div>
                            <p>Date : 15 Juillet</p>
                            <p>Date : 15 Juillet</p>
                        </div>
                        <div>
                            <p>Date : 15 Juillet</p>
                            <p>Date : 15 Juillet</p>
                        </div>
                </div>
                        <div class="action">
                            <a href=""><i class="fa-solid fa-trash" style="color: #e01b24;"></i></a>
                            <a href=""><i class="fa-solid fa-pen" style="color: #74C0FC;"></i></a>
                        </div>
            </div>
        </div>
    </div>
    <div class="card-container">
    <h4>La liste de mes évennements</h4>
    <div class="">
        <div class="row">
              
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
