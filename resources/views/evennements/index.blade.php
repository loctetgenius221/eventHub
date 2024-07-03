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
                <div class="container mt-5" >
                    <form class="row g-3" action="{{route('evennements.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Nom</label>
                                <input type="text" class="form-control @error('nom') is-invalid @enderror"" id="inputEmail4" placeholder="Titre de l'évennemnt" name="nom" value="{{ old('nom') }}">
                                    @error('nom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Date</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror"" id="inputPassword4" name="date " value="{{ old('date') }}">
                                @error('date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Lieu</label>
                                <input type="text" class="form-control @error('lieu') is-invalid @enderror"" id="inputAddress" placeholder="Lieu de l'évenement" name="lieu" value="{{ old('lieu') }}">
                                @error('lieu')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Durée</label>
                                <input type="time" class="form-control @error('duree') is-invalid @enderror"" id="inputAddress2" placeholder="durée de l'évennement" name="duree" value="{{ old('duree') }}">
                                @error('duree')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-4">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nombre de place</label>
                                    <input type="number" class="form-control @error('nombre_de_place') is-invalid @enderror" id="inputAddress2" placeholder="le nombre de place disponible" name="nombre_de_place" value="{{ old('nombre_de_place') }}">
                                    @error('nombre_de_place')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Date limite</label>
                                <input type="date" class="form-control @error('date_limite') is-invalid @enderror"" id="inputAddress2" placeholder="date limite de l'évennement" name="date_limite" value="{{ old('date_limite') }}">
                                @error('date_limite')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"" id="exampleFormControlTextarea1" rows="3" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            </div>   
                            <div class="responsive-flex">
                            <div class="col-md-2">
                                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"" id="inputAddress2" placeholder="affiche " name="image" value="{{ old('image') }}">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
            <img src="{{ asset('storage/blog/'.$evennement->image )}}" alt="{{ $evennement->nom }}" >
          </div>
          <div class="card-content">
            <h5 class="card-title">{{$evennement->nom}}</h5>
            <p class="card-text">
                {{ Str::limit($evennement->description , 60);}}
            </p>
          </div>
          <div class="card-actions">
            <a href="{{ route('evennements.show', $evennement->id) }}"><button type="button" class="card-button">Voire plus</button></a>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
@endsection