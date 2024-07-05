@extends('layouts/admins.app')

@section('content')
<div class="container px-4 mt-6 ">
  <div class="row gx-5 ">
    <div class="col-6 mt-6 ">
     <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl">
      <div class="profile-icon space-x-1.5"><i class="fa-solid fa-users ml-2 mt-2"></i></div>
      <div><h2>Nombre d’utilisateurs</h2><br>
        <h1 class="text-2xl font-bold">{{ $userCount }}</h1>
     </div>
     {{-- <div class="three"><i class="fa-solid fa-ellipsis-vertical" style="color: #c061cb;"></i></div> --}}
    </div>
    </div>
    <div class="col-6 mt-6 ">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl">
       <div class="profile-icon space-x-1.5"></div>
       <div><h2>Nombre d’associations</h2><br>
             <h1 class="text-2xl font-bold">{{$associationCount}}</h1>
      </div>
      
     </div>
     </div>
     <div class="col-6 mt-6 ">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl">
       <div class="profile-icon space-x-1.5"></div>
       <div><h2>Nombre d’évennements</h2><br>
             <h1 class="text-2xl font-bold">{{$evennementCount}}</h1>
      </div>
      
     </div>
     </div>

     <div class="col-6 mt-6 ">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl">
       <div class="profile-icon space-x-1.5"></div>
       <div><h2>Nombre d’associations suspendus</h2><br>
             <h1 class="text-2xl font-bold">{{$suspendedAssociationCount}}</h1>
       </div>
     </div>
     </div>
  </div>
</div>
<div class="form-container">
  @foreach ($associations as $association)    
  <div class="container px-4 border bg-light flex space-x-4 bg-white rounded-xl max-h-24 mt-6">
      
          <div class="row ">
            <div class="col-12">
              <div class="logo-association rounded-xl w-20 m-2 rounded-lg">
                  <img src="{{$association->logo}}" alt="" class="rounded-lg">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
@endsection
