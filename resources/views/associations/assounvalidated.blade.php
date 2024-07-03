@extends('layouts/admins.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Associations en attente de validation</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($associationsEnAttente as $association)
                <tr>
                    <td>{{ $association->user->name }}</td>
                    <td>
                        <form action="{{ route('associations.validate', ['association' => $association->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit">Valider</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
@endsection
