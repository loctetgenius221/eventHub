<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EvennementController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin', function () {
    return view('admins.accueil');
});
// listes des inscrits dans le platforme
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
//les controller pour les crud avenements avec les ressources
Route::resources([
    'evennements' => EvennementController::class,
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
    // 'reservations' => ReservationController::class,
]);

Route::get('evennement/detail/{id}', [EvennementController::class, 'detail'])->name('evennement.detail');
Route:: get('inscription/{id}', [EvennementController::class, 'inscription']);

require __DIR__.'/auth.php';
//rouet pour les permissions
Route::resource('permissions', PermissionController::class);
Route::get('permissions/{permissionsId}/delete', [PermissionController::class,'destroy']);

//route pour les role
Route::resource('roles', RoleController::class);
Route::get('roles/{rolesId}/delete', [RoleController::class,'destroy']);
Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);
