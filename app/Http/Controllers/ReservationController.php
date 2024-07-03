<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evennement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $reservation = new Reservation([

            'created_at' => now(),
            'evenement_id' => $request->input('evenement_id'),// Assigner l'ID du candidat connecté
            'user_id' => Auth::id()  
        ]);
         // Enregistrez la reservation dans la base de données
    $reservation->save();
    return redirect()->back()->with('success', 'réservation soumise avec succès');
      
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
    public function destroy(Reservation $reservation)
    {
        //
    }
}
