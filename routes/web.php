<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PersonaController;

Route::get('/persona/{id}', [PersonaController::class, 'show']);
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> formulario/main
