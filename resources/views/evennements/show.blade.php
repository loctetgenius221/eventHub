@extends('layouts/association.side-bar')

@section('content')
            <div class="form-container-detail">
                <div class="container mt-5" >
                  <img src="{{ asset('storage/blog/'.$evennement->image )}}" alt="{{ $evennement->nom }}" style="width: 100%" >
                <div class="body-card-detail">
                    <h1>{{$evennement->nom}}</h1>
                <div class="event-meta">
                    <p><i class="fas fa-calendar"></i> Date : {{$evennement->date}}</p>
                    <p><i class="fas fa-clock"></i> Heure : 14:00 - 17:00</p>
                    <p><i class="fas fa-map-marker-alt"></i> Lieu : {{$evennement->lieu}}</p>
                </div>
                <p>{{$evennement->description}}</p>
                        <div class="action">
                            <form action="{{ route('evennements.destroy', $evennement->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0">
                                    <i class="fa-solid fa-trash" style="color: #e01b24;"></i>
                                </button>
                            </form>
                            <a href="{{ route('evennements.edit', $evennement->id) }}"><i class="fa-solid fa-pen" style="color: #74C0FC;"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="liste-inscrits bg-blend-multiply mt-6 event-card">
                <h2>La liste des inscrits à cet évennement</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($evennement->reservations as $reservation)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $reservation->user->name }}</td>
                            <td>{{ $reservation->user->address }}</td>
                            <td>{{ $reservation->user->phone }}</td>
                            <td>{{ $reservation->user->email }}</td>
                            <td>
                                <form action="{{ route('reservations.decline', $reservation->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Décliner</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('export.participants', ['evenement_id' => $reservation->evennement->id]) }}" class="btn btn-primary">Exporter Participants</a>
            </div>

    </div>


@endsection
