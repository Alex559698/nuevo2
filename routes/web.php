<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::get('/persona/{id}', [PersonaController::class, 'show']);
