<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des participants</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .event-details {
            margin-bottom: 20px;
        }
        .event-details th, .event-details td {
            padding: 8px;
            text-align: left;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        table thead th {
            background: #ff5e5e;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Liste des participants</h1>
    </div>
    <div class="event-details">
        <table>
            <tr>
                <th>Événement:</th>
                <td>{{ $evenement->nom }}</td>
            </tr>
            <tr>
                <th>Date:</th>
                <td>{{ $evenement->date }}</td>
            </tr>
            <tr>
                <th>Lieu:</th>
                <td>{{ $evenement->lieu }}</td>
            </tr>
            {{-- <tr>
                <th>Association:</th>
                <td>{{ $association->name }}</td>
            </tr> --}}
        </table>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $participant)
                <tr>
                    <td>{{ $participant->user->name }}</td>
                    <td>{{ $participant->user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Généré par {{ config('app.name') }}</p>
    </div>
</body>
</html>
