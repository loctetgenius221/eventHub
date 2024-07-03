@extends('layouts/admins.app')

@section('content')

            <div class="form-container">
                <h2 class="text-lg"><a href=""><i class="fa-solid fa-arrow-right fa-flip-horizontal" style="color: #f66151;margin-right:20px;"></i></a>Coordonnées </h2>
            
                <div class="container px-4 mt-6 ">
  <div class="row gx-5 ">
    <div class="col-4 mt-6 ">
     <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl min-h-80">
        <div>
        
            <ul class="my-3">
              <li class="my-3"><i class="fa-solid fa-location-dot mx-2" style="color: #f66151;"></i>{{$association->adresse}}</li>
            <li class="my-3"><i class="fa-solid fa-phone mx-2" style="color: #f66151;"></i>{{$user->phone}}</li>
            <li class="my-3"><i class="fa-solid fa-envelope mx-2" style="color: #f66151;"></i>{{$user->email}}</</li>
            <li class="my-3"><i class="fa-solid fa-calendar-days mx-2" style="color: #f66151;"></i>{{$association->date_creation}}</li>
            </ul>  
            <hr style="justify-content: center;" class="font-bold">
            <h2 class="my-3 font-bold">Activité</h2>
            <p class="my-3">{{$association->activite}}</p>
       </div>
       
     {{-- <div class="three"><i class="fa-solid fa-ellipsis-vertical" style="color: #c061cb;"></i></div> --}}
    </div>
    </div>
    <div class="col-8 mt-6 ">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl min-h-80">
       
       <div>
        <h1 class="my-3 font-bold">Description</h1>
        <hr style="justify-content: center;" class="font-bold">
           <p>{{$association->description}}</p>  
      </div>
      
     </div>
     </div>
     
  </div>
</div>



            </div>
        </div>
               
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
@endsection