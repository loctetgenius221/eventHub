@extends('layouts/admins.app')

@section('content')

<div class="form-container">
    <h2 class="text-lg"><a href=""><i class="fa-solid fa-arrow-right fa-flip-horizontal" style="color: #f66151;margin-right:20px;"></i></a>Coordonnées </h2>
            
<div class="container px-4 border bg-light flex space-x-4 bg-white rounded-xl max-h-24">
    @foreach ($associations as $association)
        <div class="row ">
          <div class="col-12">
            <div class="logo-association rounded-xl w-20 m-2 rounded-lg">
                <img src="https://img.freepik.com/psd-gratuit/affiche-evenement-entreprise_1409-1117.jpg?t=st=1720009786~exp=1720013386~hmac=a2d66cf997c57991663601b0aa1f858658c136552d8e8ab1ba1c8b3b0a0a3f6e&w=740" alt="" class="rounded-lg">
            </div>
          </div>
        </div> 
            <div class="logo-association rounded-xl m-2 rounded-lg">
                <ul>
                    <li class="text-xl">Senebach</li>
                    <li class="mt-6"><i class="fa-solid fa-calendar-days mx-2" style="color: #f66151;"></i>{{$association->date_creation}}</li>
                    
                </ul>
            </div>    

            <div class="logo-association rounded-xl  m-2 rounded-lg ml-8">
                <ul>
                    <li class="ml-64"><i class="fa-solid fa-location-dot mx-2" style="color: #f66151;"></i>{{$association->adresse}}</li>
                    <li class="mt-8 ml-64"><i class="fa-solid fa-phone mx-2" style="color: #f66151;"></i>+221 766149938</li>
                </ul>
               
            </div> 
            <div class="logo-association rounded-xl w-20 m-2 rounded-lg">
                <ul>
                    <li class="ml-64">
                        <form action="{{ route('associations.toggle-suspension', $association->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="suspended" value="0">
                            <input type="checkbox" id="toggle1" name="suspended" value="1" {{ $association->suspended ? 'checked' : '' }} onchange="this.form.submit()">
                            <label for="toggle1"></label>
                        </form>
                    </li>
                    <li class="ml-64 mt-2">
                        <a href="{{ route('associations.show', ['association' => $association->id]) }}">
                            <button class="detail-btn">Detail</button>
                        </a>
                    </li>
                </ul>
            </div> 
</div>
@endforeach
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
@endsection