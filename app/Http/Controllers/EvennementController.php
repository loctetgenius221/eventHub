<?php

namespace App\Http\Controllers;

use App\Models\Evennement;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EvennementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evennements=Evennement::all();
        return view('evennements.index',compact('evennements'));
    }

    public function acceuil(){
         $evennements = Evennement::take(3)->get();

         return view ('welcome',compact('evennements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $data = $request->all();
        // Valider les autres champs du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'date' => 'required|date',
            'lieu' => 'required',
            'duree' => 'required',
            'nombre_de_place' => 'required|integer',
            'date_limite' => 'required|date',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = null;

        // Vérifier si un fichier image est uploadé
        if ($request->hasFile('image')) {
            // Stocker l'image dans le répertoire 'public/blog'
            $chemin_image = $request->file('image')->store('public/blog');

            // Vérifier si le chemin de l'image est bien généré
            if (!$chemin_image) {
                return redirect()->back()->with('error', 'Erreur lors du téléchargement de l\'image.');
            }

            // Récupérer le nom du fichier de l'image
            $data['image'] = basename($chemin_image);
        }

        Evennement::create($data);
        return redirect('evennements');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evennement $evennement)
    {
        $evennement->load('reservations.user');
        return view('evennements.show', compact('evennement'));
        $reservations = Reservation::where('evenement_id', $evennement->id)->get();
        $users = User::all();

        return view('evennements.show', compact('evennement', 'reservations', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evennement $evennement)
    {
        $evennements=Evennement::all();
        return view('evennements.edit', compact('evennement','evennements'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evennement $evennement)
    {

        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'date' => 'required|date',
            'lieu' => 'required',
            'duree' => 'required',
            'nombre_de_place' => 'required|integer',
            'date_limite' => 'required|date',
            'description' => 'required',
            'image' => 'required',
        ]);

        // $image = null;

        // Vérifier si un fichier image est uploadé
        if ($request->hasFile('image')) {
            // Stocker l'image dans le répertoire 'public/blog'
            $chemin_image = $request->file('image')->store('public/blog');

            // Vérifier si le chemin de l'image est bien généré
            if (!$chemin_image) {
                return redirect()->back()->with('error', 'Erreur lors du téléchargement de l\'image.');
            }

            // Récupérer le nom du fichier de l'image
            $validatedData['image'] = basename($chemin_image);
        }
    $evennement->update($validatedData);

    return redirect('evennements')->with('success', 'Événement mis à jour avec succès.');
    }
    public function showEvents()
    {
        $evennements = Evennement::all();
        return view('evennements.allevent', compact('evennements'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evennement $evennement)
    {
        $evennement->delete();
        return redirect('evennements')->with('success', 'Evénnement supprimée avec succès.');
    }

    public function detail($id) {
        $evennement = Evennement::find($id);
        return view('evennements.detail', compact('evennement'));
    }

    public function inscription($id) {

        if (Auth::check()) {

            $user = Auth::user();
            $evennement = Evennement::find($id);

            if ($evennement) {
                return view('evennements.inscription', compact('evennement','user'));
            } else {
                return redirect()->route('evennements.index')->with('error', 'Événement non trouvé.');
            }
        } else {
            return redirect()->route('login')->with('message', 'Veuillez vous connectez pour pouvoir vous inscrire à l\'évennement');
        }
    }

}
