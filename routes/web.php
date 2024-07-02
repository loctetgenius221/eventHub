<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvennementController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admins.listes-inscrit');
});

Route::get('/admin-accueil', function () {
    return view('admins.accueil');
});
//les controller pour les crud avenements avec les ressources
Route::resources([
    'evennements' => EvennementController::class,
]);

//rouet pour les permissions
Route::resource('permissions', PermissionController::class);
Route::get('permissions/{permissionsId}/delete', [PermissionController::class,'destroy']);

//route pour les role
Route::resource('roles', RoleController::class);
Route::get('roles/{rolesId}/delete', [RoleController::class,'destroy']);
Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);
