<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
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
}
