<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssociationController;

Route::get('/', function () {
    return view('welcome');
});

//rouet pour les permissions
Route::resource('permissions', PermissionController::class);
Route::get('permissions/{permissionsId}/delete', [PermissionController::class,'destroy']);

//route pour les role
Route::resource('roles', RoleController::class);
Route::get('roles/{rolesId}/delete', [RoleController::class,'destroy']);
Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

Route::get('/formulaire',[UserController::class,'register']);
Route::post('/users', [UserController::class, 'store']);
