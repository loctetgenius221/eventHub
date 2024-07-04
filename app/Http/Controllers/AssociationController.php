<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AssociationValidated;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $associations = Association::with('user')->get();
        $user=User::all();
        return view('admins.listes-associations', compact('associations','user'));
    }

    // Validation des comptes associations

    public function associationsEnAttente()
    {
        $associationsEnAttente = Association::where('validated', false)->get();

        return view('associations.assounvalidated', compact('associationsEnAttente'));
    }

    public function validateAssociation($id)
    {
        $association = Association::findOrFail($id);
        $association->validated = true;
        $association->save();
        if ($association->user) {
            Mail::to($association->user->email)->send(new AssociationValidated($association));
        } else {
            return redirect()->back()->with('error', 'L\'association n\'a pas d\'utilisateur associé.');
        }

        return redirect()->back()->with('success', 'Association validée avec succès.');
    }

    public function toggleSuspension(Request $request, $id)
    {
        $association = Association::findOrFail($id);
        $association->suspended = $request->input('suspended') === '1';
        $association->save();

        return redirect()->back()->with('success', 'Le statut de suspension de l\'association a été mis à jour.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {   
        $user = $association->user;
        $evennements = $association->user->evennements;
        return view('admins.detail-association', compact('association','user','evennements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Association $association)
    {
        //
    }
}
