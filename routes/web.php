<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EvennementController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


// listes des inscrits dans le platforme  interface admin
Route::get('/admin/accueil', [AdminController::class, 'accueil'])->name('admin.accueil');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::put('/users/{user}/update-role', [UserController::class, 'updateRole'])->name('users.updateRole');
//les controller pour les crud avenements avec les ressources
Route::resources([
    'evennements' => EvennementController::class,
    'associations' => AssociationController::class,
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//les controller pour les crud associations /avenements /reservations avec les ressources
Route::resources([
    // 'associations' => AssociationController::class,
    'evennements' => EvennementController::class,
    'associations' => AssociationController::class,

    // 'reservations' => ReservationController::class,
]);

// dashboard admin gestion des associations
Route::get('dashboard-admin', [AssociationController::class, 'associationsEnAttente']);
Route::put('association/valider/{association}', [AssociationController::class, 'validateAssociation'])->name('associations.validate');
Route::post('/associations/{id}/toggle-suspension', [AssociationController::class, 'toggleSuspension'])->name('associations.toggle-suspension');



Route::get('evennement/detail/{id}', [EvennementController::class, 'detail'])->name('evennement.detail');
Route:: get('inscription/{id}', [EvennementController::class, 'inscription']);

require __DIR__.'/auth.php';
// Autres routes...

Route::get('/', [EvennementController::class, 'acceuil'])->name('home');
Route::get('user-deconnect', function(){
    Auth::logout();
});
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
Route::get('/reservations/create/{id}', [ReservationController::class, 'create'])->name('reservations.create')->middleware('auth');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// Route pour le formulaire utilisateur
Route::get('/formulaire', [UserController::class, 'register']);
Route::post('/users', [UserController::class, 'store']);

// Routes pour l'authentification
require __DIR__ . '/auth.php';
