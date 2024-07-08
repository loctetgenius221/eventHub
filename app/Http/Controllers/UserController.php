<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\Association;
use Exception;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admins.listes-inscrit', compact('users','roles'));
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès.');
    }

    public function updateRole(Request $request, User $user)
{
    $request->validate([
        'role_id' => 'required|exists:roles,id',
    ]);

    $user->roles()->sync([$request->role_id]);

    return redirect()->back()->with('success', 'Rôle mis à jour avec succès');
}
    public function register()
    {
        return view('associations.inscription');
    }
    public function store(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                // Insérer les données dans la table users
                $user = User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                ]);

                // Insérer les données dans la table associations
                Association::create([
                    'user_id' => $user->id,
                    'ninea' => $request->input('ninea'),
                    'description' => $request->input('description'),
                    'activite' => $request->input('activite'),
                    'adresse' => $request->input('adresse'),
                    'date_creation' => $request->input('date_creation'),
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);
                $user->assignRole('association');
            });

            return redirect()->route('login')->with('success', 'Inscription Réussie. Veuillez-vous connecter.');
        } catch (Exception $e) {
            return response()->json(['message' => 'Échec de la transaction : ' . $e->getMessage()], 500);
        }
    }
}


