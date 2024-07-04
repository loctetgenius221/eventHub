<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation</title>
    <link rel="stylesheet" href="{{ asset('css/participant/inscription.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" >
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Formulaire de réservation à l’événement</h1>
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Champ caché pour l'ID de l'utilisateur -->
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="evenement_id" value="{{ $evennement->id }}">

                <div class="form-group">
                    <input type="text" name="name" value="{{ auth()->user()->name }}" readonly placeholder="Prénom et nom" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" value="{{ auth()->user()->email }}" readonly required>
                </div>
                <button type="submit" class="submit-btn">Je m'inscris à l'événement</button>
            </form>
        </div>
        <div>
    </body>
        </html>
