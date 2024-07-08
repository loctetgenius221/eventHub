<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evennement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\ReservationAccepted;
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
        $evennement = Evennement::findOrFail($id);
        $user = Auth::user();

        // Calculons le nombre de places disponibles
        $places_prises = $evennement->reservations->count();
        $places_disponibles = $evennement->nombre_de_place - $places_prises;

        // Vérifions s'il y a des places disponibles
        if ($places_disponibles > 0) {
            return view('reservations.index', compact('evennement', 'user'));
        } else {
            return redirect()->back()->with('error', 'Il n\'y a plus de places disponibles pour cet événement.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evennement = Evennement::findOrFail($request->input('evenement_id'));

        $places_prises = $evennement->reservations->count();
        $places_disponibles = $evennement->nombre_de_place - $places_prises;

        if ($places_disponibles <= 0) {
            return redirect()->back()->with('error', 'Il n\'y a plus de places disponibles pour cet événement.');
        }

        // Vérifier si l'utilisateur est déjà inscrit
        $existingReservation = Reservation::where('user_id', Auth::id())
            ->where('evenement_id', $request->input('evenement_id'))
            ->first();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'Vous êtes déjà inscrit à cet événement.');
        }

        $reservation = new Reservation([
            'created_at' => now(),
            'evenement_id' => $request->input('evenement_id'),
            'user_id' => Auth::id()
        ]);

        $reservation->save();
        Mail::to($reservation->user->email)->send(new ReservationAccepted($reservation));
        Auth::logout();

        return redirect(route('home'))->with('success', 'Réservation soumise avec succès');

    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $user = $reservation->user;

        $reservation->delete();

        Mail::to($user->email)->send(new ReservationDeclined($reservation));

        return redirect()->back()->with('success', 'L\'inscription a été déclinée et l\'utilisateur a été notifié.');
    }

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

}
