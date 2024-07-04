<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::get();
        return view('role-permission.roles.index', [
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role-permission.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'unique:roles',
                'string',
            ]
        ]);
        Role::create([
            'name' => $request->name,
            'guard_name' => 'web'  
        ]);
        return redirect('roles')->with('status', 'Role créée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('role-permission.roles.edit', [
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
            ]
        ]);
        $role->update([
            'name' => $request->name
        ]);
        return redirect('roles')->with('status', 'Role modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($roleId)
    {
        $role = Role::find($roleId);
        $role->delete();
        return redirect('roles')->with('status', 'Role supprimée avec succès');
    }
    public function addPermissionToRole($roleId)
{
    $permissions = Permission::all();
    $role = Role::findOrFail($roleId);

    $rolePermissions = DB::table('role_has_permissions')
                        ->where('role_id', $role->id)
                        ->pluck('permission_id')
                        ->toArray(); // Convertir en tableau pour une utilisation dans in_array

    return view('role-permission.roles.add-permissions', [
        'role' => $role,
        'permissions' => $permissions,
        'rolePermissions' => $rolePermissions,
    ]);
}

    public function givePermissionToRole(Request $request, $roleId){
          $request->validate([
            'permission' =>'required'
          ]);

          $role = role::findOrFail($roleId);
          $role->syncPermissions($request->permission);

          return redirect()->back()->with('status','La permission a été ajoutée au role');

    }
}
