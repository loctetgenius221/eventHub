<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>evenHub</title>
</head>
<style>
    .container {
        background-color: #fff;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

    <div class="container mt-5" >
        <form class="row g-3" action="{{route('evennements.update', $evennement->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="id" style="display: none;"  value="{{$evennement->id}}">            <div class="col-md-4">
              <label for="inputEmail4" class="form-label">Nom</label>
              <input type="text" class="form-control" id="inputEmail4" name="nom" value="{{$evennement->nom}}">
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Date</label>
              <input type="date" class="form-control" id="inputPassword4" name="date" value="{{$evennement->date}}">
            </div>
            <div class="col-4">
              <label for="inputAddress" class="form-label">Lieu</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="lieu"  value="{{$evennement->lieu}}">
            </div>
            <div class="col-4">
              <label for="inputAddress2" class="form-label">Durée</label>
              <input type="time" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="duree"  value="{{$evennement->duree}}">
            </div>
            <div class="col-md-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Nombre de place</label>
                    <input type="number" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="nombre_de_place" value="{{$evennement->nombre_de_place}}">
                </div>
            <div class="col-md-4">
                <label for="exampleFormControlTextarea1" class="form-label">Date limite</label>
                <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="date_limite" value="{{$evennement->date_limite}}">
            </div>
        <div class="col-md-12">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$evennement->description}}</textarea>
    </div>   
    <div class="d-flex justify-content-between">
            <div class="col-md-4">
                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="image" value="{{$evennement->image}}">
            </div>
           
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Modifier un evnnemment</button>
            </div>
    </div>
          </form>

        <div class="row">
            @foreach ($evennements as $evennement)
                            <div class="card" style="width: 18rem;">
                <img src="{{$evennement->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$evennement->nom}}</h5>
                  <p class="card-text">{{$evennement->description}}</p>
                  <a href="#" class="btn btn-primary">{{$evennement->date}}</a>
                  <a href="{{route('evennements.destroy',$evennement->id)}}">Supprimer</a>
                </div>
              </div>
              @endforeach

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>