<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Association;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admins.listes-inscrit', compact('users'));
    }

    public function register(){
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
                    'association_name' => $request->input('association_name'),
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);
            });

            return response()->json(['message' => 'Transaction réussie !'], 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Échec de la transaction : ' . $e->getMessage()], 500);
        }
    }
}
