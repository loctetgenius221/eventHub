<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\EvennementController;
use App\Http\Controllers\ReservationController;


Route::get('/',[EvennementController::class,'acceuil']);

//les controller pour les crud associations /avenements /reservations avec les ressources
Route::resources([
    // 'associations' => AssociationController::class,
    'evennements' => EvennementController::class,
    // 'reservations' => ReservationController::class,
]);
// route pour les permissions
Route::resource('permissions', PermissionController::class);
Route::get('permissions/{permissionsId}/delete', [PermissionController::class,'destroy']);

// route pour les role
Route::resource('roles', RoleController::class);
Route::get('roles/{rolesId}/delete', [RoleController::class,'destroy']);
Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

Route::get('/formulaire',[UserController::class,'register']);
Route::post('/users', [UserController::class, 'store']);