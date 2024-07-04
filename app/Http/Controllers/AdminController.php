<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Evennement;
use App\Models\Association;
use Illuminate\Http\Request;

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
        $user=User::all();
        // Passez la variable à la vue
        return view('admins.accueil', compact('userCount', 'associationCount','evennementCount', 'suspendedAssociationCount','associations','user'));
    }

   
}
