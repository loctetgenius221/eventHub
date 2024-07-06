@extends('layouts/admins.app')

@section('content')
<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: .4s;
}

input:checked + .slider {
  background-color: #f66151;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="form-container">
    <h2 class="text-lg"><a href=""><i class="fa-solid fa-arrow-right fa-flip-horizontal" style="color: #f66151;margin-right:20px;"></i></a>Coordonnées </h2>
    @foreach ($associations as $association)    
<div class="container px-4 border bg-light flex  flex-wrap space-x-4 bg-white rounded-xl max-h-24 mt-6">
    
        <div class="row ">
          <div class="col-12">
            <div class="logo-association rounded-xl w-20 m-2 rounded-lg">
                <img src="{{$association->logo}}" alt="" class="rounded-lg">
            </div>
          </div>
        </div> 
            <div class="logo-association rounded-xl m-2 rounded-lg">
                <ul>
                    <li class="text-xl">Nom Association</li>
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
                            <label class="switch">
                                <input type="checkbox" name="suspended" {{ $association->suspended ? '' : 'checked' }} onchange="this.form.submit()">
                                <span class="slider round"></span>
                            </label>
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