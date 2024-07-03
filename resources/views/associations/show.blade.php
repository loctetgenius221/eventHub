@extends('layouts/admins.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'Association</title>
    <link rel="stylesheet" href="{{ asset('css/admin/showAsso.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <header>
            <a href="{{ route('associations.index') }}" class="back-button">←</a>
            <h1>Coordonnées</h1>
        </header>
        <div class="details">
            <div class="info">
                <p><i class="fas fa-phone"></i> {{ $association->user->phone }}</p>
                <p><i class="fas fa-envelope"></i> {{ $association->user->email }}</p>
                <p><i class="far fa-calendar-alt"></i>{{ $association->date_creation }}</p>
                <p><i class="fas fa-map-marker-alt"></i> {{ $association->user->address }}</p>
            </div>
            <div class="activity">
                <h2>Activité</h2>
                <p>{{ $association->activite }}</p>
            </div>
            <div class="description">
                <h2>Description</h2>
                <p>{{ $association->description }}</p>
            </div>
            <div class="association-logo">
                <img src="{{ asset('storage/' . $association->logo) }}" alt="Logo">
                <h2>{{ $association->user->name }}</h2>
            </div>
            <div class="ninea">
                <div class="ninea-button">
                    <span class="icon">NINEA: {{ $association->ninea }}</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
