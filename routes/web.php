<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\EvennementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;

// Autres routes...

Route::get('/', [EvennementController::class, 'acceuil']);

// Routes pour les permissions
Route::resource('permissions', PermissionController::class);
Route::get('permissions/{permissionsId}/delete', [PermissionController::class, 'destroy']);

// Routes pour les rôles
Route::resource('roles', RoleController::class);
Route::get('roles/{rolesId}/delete', [RoleController::class, 'destroy']);
Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

// Routes pour le profil
Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');

// Routes pour les événements
Route::resource('evennements', EvennementController::class);

// Route pour les détails d'un événement
Route::get('evennement/detail/{id}', [EvennementController::class, 'detail'])->name('evennement.detail');

// Routes pour les réservations
Route::resource('reservations', ReservationController::class)->except(['create', 'store']);  // Exclure 'create' et 'store' car ils sont traités dans les routes spécifiques
Route::get('/reservations/create/{id}', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// Route pour le formulaire utilisateur
Route::get('/formulaire', [UserController::class, 'register']);
Route::post('/users', [UserController::class, 'store']);

// Routes pour l'authentification
require __DIR__ . '/auth.php';
