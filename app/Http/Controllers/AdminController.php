<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Evennement;
use App\Models\Association;
use Illuminate\Http\Request;
use App\Mail\AssociationValidated;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function accueil()
    {
        // Comptez le nombre d'utilisateurs
        $userCount = User::count();

        // Comptez le nombre d'associations
        $associationCount = Association::count();

        $evennementCount = Evennement::count();


        // Comptez le nombre d'associations suspendues
        $suspendedAssociationCount = Association::where('suspended', true)->count();
        $associations = Association::with('user')->get();
        $unvalidatedAssociations = Association::where('validated', 0)->with('user')->get();


        // $user = $association->user;
        // Passez la variable à la vue
        return view('admins.accueil', compact('userCount', 'associationCount','evennementCount', 'suspendedAssociationCount','associations', 'unvalidatedAssociations'));
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


}
