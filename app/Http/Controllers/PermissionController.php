<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
// use Illuminate\Validation\Rule;


class PermissionController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions=Permission::get();
        return view('role-permission.permision.index',[
            'permissions' =>$permissions        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role-permission.permision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>[
             'required',
             'unique:permissions',
             'string',
           ]
        ]);
        Permission::create([
            'name' => $request->name
        ]);
        return redirect('permissions')->with('status','Permission créée avec succés');
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
    public function edit(Permission $permission)
    {
        
        return view('role-permission.permision.edit',[
            'permission' =>$permission 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name'=>[
              'required',
            //   Rule::unique('permissions')->ignore($permission->id),
              'string',
            ]
         ]);
         $permission->update([
             'name' => $request->name
         ]);
         return redirect('permissions')->with('status','Permission modifiée avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($permissionId)
    {
        $permission=Permission::find($permissionId);
        $permission->delete();
        return redirect('permissions')->with('status','Permission supprimée avec succés');
    }
}
