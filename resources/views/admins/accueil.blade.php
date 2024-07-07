@extends('layouts/admins.app')

@section('content')
<style>
    .icon-white {
        color: white;
        padding: 10px;
        border-radius: 50%;
    }
</style>

<div class="container px-4 mt-6">
  <div class="row gx-5">
    <div class="col-6 mt-6">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl">
        <div class="profile-icon space-x-1.5">
          <i class="fa-solid fa-users ml-1 icon-white"></i>
        </div>
        <div>
          <h2>Nombre d’utilisateurs</h2><br>
          <h1 class="text-2xl font-bold">{{ $userCount }}</h1>
        </div>
      </div>
    </div>
    <div class="col-6 mt-6">
      <div class="p-3 border bg-light flex space-x-4 bg-white ">
        <div class="profile-icon space-x-1.5">
          <i class="fa-solid fa-building ml-2 icon-white"></i>
        </div>
        <div>
          <h2>Nombre d’associations</h2><br>
          <h1 class="text-2xl font-bold">{{$associationCount}}</h1>
        </div>
      </div>
    </div>
    <div class="col-6 mt-6">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl">
        <div class="profile-icon space-x-1.5">
          <i class="fa-solid fa-calendar ml-1 icon-white"></i>
        </div>
        <div>
          <h2>Nombre d’événements</h2><br>
          <h1 class="text-2xl font-bold">{{$evennementCount}}</h1>
        </div>
      </div>
    </div>
    <div class="col-6 mt-6">
      <div class="p-3 border bg-light flex space-x-4 bg-white rounded-xl">
        <div class="profile-icon space-x-1.5">
          <i class="fa-solid fa-ban ml-1 icon-white"></i>
        </div>
        <div>
          <h2>Nombre d’associations suspendues</h2><br>
          <h1 class="text-2xl font-bold">{{$suspendedAssociationCount}}</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="form-container">
  @foreach ($associations as $association)
  <div class="container px-4 border bg-light flex space-x-4 bg-white rounded-xl max-h-24 mt-6">
    <div class="row">
      <div class="col-12">
        <div class="logo-association rounded-xl w-20 m-2">
          <img src="{{ asset('storage/blog/' . $association->logo ) }}" alt="Logo de l'association" class="rounded-lg w-full h-auto">
        </div>
      </div>
    </div>
    <div class="logo-association rounded-xl m-2">
      <ul>
        <li class="text-xl">{{$association->association_name}}</li>
        <li class="mt-6">
          <i class="fa-solid fa-calendar-days mx-2" style="color: #ff69b4;"></i>{{$association->date_creation}}
        </li>
      </ul>
    </div>
    <div class="logo-association rounded-xl m-2 ml-8">
      <ul>
        <li class="ml-64">
          <i class="fa-solid fa-location-dot mx-2 mt-4" style="color: #ff69b4;"></i>{{$association->adresse}}
        </li>
      </ul>
    </div>
    <div class="logo-association rounded-xl w-20 m-2">
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

@endsection
