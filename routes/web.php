<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvennementController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ReservationController;

// Route::get('/', function () {
//     return view('welcome');
// });

//les controller pour les crud associations /avenements /reservations avec les ressources
Route::resources([
    // 'associations' => AssociationController::class,
    'evennements' => EvennementController::class,
    // 'reservations' => ReservationController::class,
]);