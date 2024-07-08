@extends('layouts/association.side-bar')

@section('content')

        <div class="form-container">
            <h2>Mettre à jour l'évènement</h2>
            <div class="container mt-5">
                <form class="row g-3" action="{{ route('evennements.update', $evennement->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="current_image" value="{{ $evennement->image }}">

                    <div class="col-md-4">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $evennement->nom }}">
                    </div>
                    <div class="col-md-4">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $evennement->date }}">
                    </div>
                    <div class="col-4">
                        <label for="lieu" class="form-label">Lieu</label>
                        <input type="text" class="form-control" id="lieu" name="lieu" value="{{ $evennement->lieu }}">
                    </div>
                    <div class="col-4">
                        <label for="duree" class="form-label">Durée</label>
                        <input type="time" class="form-control" id="duree" name="duree" value="{{ $evennement->duree }}">
                    </div>
                    <div class="col-md-4">
                        <label for="nombre_de_place" class="form-label">Nombre de place</label>
                        <input type="number" class="form-control" id="nombre_de_place" name="nombre_de_place" value="{{ $evennement->nombre_de_place }}">
                    </div>
                    <div class="col-md-4">
                        <label for="date_limite" class="form-label">Date limite</label>
                        <input type="date" class="form-control" id="date_limite" name="date_limite" value="{{ $evennement->date_limite }}">
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ $evennement->description }}</textarea>
                    </div>
                    <div class="responsive-flex">
                        <div class="col-md-2">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <p>Image actuelle : <img src="{{ asset('storage/blog/' . $evennement->image) }}" alt="{{ $evennement->nom }}" width="100" ></p>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="button">Mettre à jour</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
@endsection