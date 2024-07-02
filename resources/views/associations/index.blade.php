<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associations</title>
    <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <h1>L'ensemble des associations</h1>
        <div class="association-list">
            @foreach ($associations as $association)
            <div class="association-item">
                <img src="{{ $association->logo }}" alt="SeneBache">
                <div class="association-details">
                    <h2>{{ $association->user->name }}</h2>
                    <p><i class="fas fa-calendar"></i>{{ $association->user->name }}</p>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $association->user->address }}</p>
                    <p><i class="fas fa-phone"></i>{{ $association->user->phone }}</p>
                </div>
                <div class="association-actions">
                    <input type="checkbox" id="toggle1" checked>
                    <label for="toggle1"></label>
                    <a href="{{ route('associations.show', ['association' => $association->id]) }}">
                        <button class="detail-btn">Detail</button>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
