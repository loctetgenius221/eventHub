<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociationController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('associations', AssociationController::class)->middleware('role:association');

Route::get('/register', function(){
    return view('auths.users.register');
});

Route::get('/login', function(){
    return view('auths.users.login');
});
