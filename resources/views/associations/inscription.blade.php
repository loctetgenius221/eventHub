<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
</head>
<body>
<form action="{{ url('/users') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
        @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        @error('email')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>

    <div>
    <label for="logo">LOGO</label>
    <input type="file" id="logo" name="logo" required>
    @error('logo')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    {{-- <div>
        <label for="association_name">Nom de l'association:</label>
        <input type="text" id="association_name" name="association_name" required>
        @error('association_name')
            <div class="error">{{ $message }}</div>
            @enderror
    </div> --}}
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="ninea">NINEA:</label>
        <input type="number" id="ninea" name="ninea" required>
        @error('ninea')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="activite">Activité</label>
        <input type="text" id="activite" name="activite" required>
        @error('activite')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" id="description" name="description" required>
        @error('description')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="adresse">Adresse de l'association</label>
        <input type="text" id="adresse" name="adresse" required>
        @error('adresse')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="date">Date de création</label>
        <input type="date" id="date" name="date_creation" required>
        @error('date')
            <div class="error">{{ $message }}</div>
            @enderror
    </div>
    <button type="submit">Créer</button>
</form>

</body>
</html>
