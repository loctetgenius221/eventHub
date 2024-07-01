<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - The Event Hub</title>
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="left-side connexion">
        </div>
        <div class="right-side">
            <div class="logo">
                <img src="{{ asset('img/auth/logo-evenhub.png')}}" alt="The Event Hub">
            </div>
            <h2>Connexion</h2>

            <!-- Session Status -->
            @if(session('status'))
                <div class="session-status">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <input type="email" id="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required autocomplete="current-password">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <button type="submit">Se connecter</button>
            </form>

            <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}">Inscrivez-vous</a></p>

            @if (Route::has('password.request'))
                <p>
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </p>
            @endif
        </div>
    </div>
</body>
</html>
