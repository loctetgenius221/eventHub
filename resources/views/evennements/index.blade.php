@extends('layouts/association.side-bar')

@section('content')

<div class="main-content">
    <header class="header">
        <button class="menu-toggle d-md-none"><i class="fas fa-bars"></i></button>
        <div class="welcome-message">SIMPLON</div>
        <div class="profile-icon"></div>
    </header>

    <div class="form-container">
        <h2>Ajouter un nouvel évènement</h2>
        <div class="container mt-5">
            <form class="row g-3" action="{{route('evennements.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Titre de l'évennemnt" name="nom">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Date</label>
                    <input type="date" class="form-control" id="inputPassword4" name="date">
                </div>
                <div class="col-4">
                    <label for="inputAddress" class="form-label">Lieu</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Lieu de l'évenement" name="lieu">
                </div>
                <div class="col-4">
                    <label for="inputAddress2" class="form-label">Heure</label>
                    <input type="time" class="form-control" id="inputAddress2" placeholder="durée de l'évennement" name="duree">
                </div>
                <div class="col-md-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Nombre de place</label>
                    <input type="number" class="form-control" id="inputAddress2" placeholder="le nombre de place disponible" name="nombre_de_place">
                </div>
                <div class="col-md-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Date limite</label>
                    <input type="date" class="form-control" id="inputAddress2" placeholder="date limite de l'évennement" name="date_limite">
                </div>
                <div class="col-md-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <div class="responsive-flex">
                    <div class="col-md-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                        <input type="file" class="form-control" id="inputAddress2" placeholder="affiche " name="image">
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="button">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card-container">
        <h4>La liste de mes évennements</h4>
        <div class="cards-container">
            @foreach ($evennements as $evennement)
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('storage/blog/'.$evennement->image )}}" alt="{{ $evennement->nom }}" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
                <div class="card-content">
                    <h5 class="card-title">{{$evennement->nom}}</h5>
                </div>
                <div class="card-actions">
                    <a href="{{ route('evennements.show', $evennement->id) }}">
                        <button type="button" class="card-button">Voir plus</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@endsection

<style>
    .main-content {
        padding: 2rem;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        background-color: #FC5C65;
        color: white;
        border-radius: 0.5rem;
    }
    

    .form-container {
        background-color: #f8f9fa;
        padding: 2rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
    }

    .form-container h2 {
        margin-bottom: 1.5rem;
    }

    .responsive-flex {
        display: flex;
        gap: 1rem;
    }

    .button {
        background-color: #FC5C65;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .button:hover {
        background-color: #e44d5a;
    }

    .card-container {
        margin-top: 2rem;
    }

    .cards-container {
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
        justify-content: space-between;
    }

    .card {
        width: calc(33.333% - 2rem);
        background-color: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-image {
        height: 200px;
        overflow: hidden;
    }

    .card-content {
        padding: 1rem;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }

    .card-actions {
        padding: 1rem;
        text-align: right;
    }

    .card-button {
        background-color: #FC5C65;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .card-button:hover {
        background-color: #e44d5a;
    }
</style>
