<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evennement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationDeclined;
use App\Mail\ReservationValidated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $evennement=Evennement::all();
        return view('reservations.index',compact('evennement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
       // Trouvez l'événement par son ID
        $evennement = Evennement::findOrFail($id);

        // Récupérez l'utilisateur authentifié
        $user = Auth::user();

        // Passez l'événement et l'utilisateur à la vue
        return view('reservations.index', compact('evennement', 'user'));;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingReservation = Reservation::where('user_id', Auth::id())
            ->where('evenement_id', $request->input('evenement_id'))
            ->first();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'Vous êtes déjà inscrit à cet événement.');
        }

        $reservation = new Reservation([

            'created_at' => now(),
            'evenement_id' => $request->input('evenement_id'),// Assigner l'ID du candidat connecté
            'user_id' => Auth::id()
        ]);
         // Enregistrez la reservation dans la base de données
        $reservation->save();

        Auth::logout();
        return redirect(route('home'))->with('success', 'réservation soumise avec succès');

    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $user = $reservation->user;

        $reservation->delete();

        Mail::to($user->email)->send(new ReservationDeclined($reservation));

        return redirect()->back()->with('success', 'L\'inscription a été déclinée et l\'utilisateur a été notifié.');
    }

    // public function decline($id)
    // {
    //     $reservation = Reservation::findOrFail($id);
    //     $reservation->statut = 'refuser';
    //     $reservation->save();

    //     Mail::to($reservation->user->email)->send(new ReservationDeclined($reservation));

    //     return redirect()->back()->with('success', 'L\'inscription a été déclinée et l\'utilisateur a été notifié.');
    // }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Reservation $reservation)
    // {
    //     //
    // }
}
