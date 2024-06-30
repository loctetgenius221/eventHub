<?php

namespace App\Http\Controllers;

use App\Models\Evennement;
use Illuminate\Http\Request;

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
        Evennement::create($request->all());
        return redirect('evennements');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evennement $evennement)
    {
        return view('evennements.show', compact('evennement'));
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
    $evennement->update($validatedData);

    return redirect('evennements')->with('success', 'Événement mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evennement $evennement)
    {
        $evennement->delete();
        return redirect('evennements')->with('success', 'Evénnement supprimée avec succès.');
    }
}
