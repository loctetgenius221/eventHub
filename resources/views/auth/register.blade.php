<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - The Event Hub</title>
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <h1>Ne ratez plus aucun événement</h1>
        </div>
        <div class="right-side">
            <div class="logo">
                <img src="{{ asset('img/auth/logo-evenhub.png')}}" alt="The Event Hub">
            </div>
            <h2>Inscription</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <input type="text" id="name" name="name" placeholder="Prénom et nom" :value="old('name')" required autofocus autocomplete="name">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="email" id="email" name="email" placeholder="Email" :value="old('email')" required autocomplete="username">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="tel" id="phone" name="phone" placeholder="Téléphone" :value="old('phone')" required>
                    @error('phone')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="text" id="address" name="address" placeholder="Adresse" :value="old('address')" required>
                    @error('address')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit">S'inscrire</button>
            </form>
            <p>Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a></p>
        </div>
    </div>
</body>
</html>
