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
              <li class="my-3"><i class="fa-solid fa-location-dot mx-2" style="color: #f66151;"></i>Lieu</li>
            <li class="my-3"><i class="fa-solid fa-phone mx-2" style="color: #f66151;"></i>+221 766149938</li>
            <li class="my-3"><i class="fa-solid fa-envelope mx-2" style="color: #f66151;"></i>fallou@gmail.com</li>
            <li class="my-3"><i class="fa-solid fa-calendar-days mx-2" style="color: #f66151;"></i>22/10/12</li>
            </ul>  
            <hr style="justify-content: center;" class="font-bold">
            <h2 class="my-3 font-bold">Activité</h2>
            <p class="my-3">description</p>
       </div>
       
     {{-- <div class="three"><i class="fa-solid fa-ellipsis-vertical" style="color: #c061cb;"></i></div> --}}
    </div>
    </div>
    <div class="col-8 mt-6 ">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl min-h-80">
       
       <div>
        <h1 class="my-3 font-bold">Description</h1>
           <p>Le lorem ipsum est, en imprimerie, une suite de mots sans  signification utilisée à titre provisoire pour calibrer une mise en  page, le texte définitif venant remplacer le faux-texte dès qu'il est  prêt ou que la mise en page est achevée.</p>  
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