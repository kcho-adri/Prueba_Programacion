<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/persona', [PersonaController::class, 'Altas']);
Route::delete('/persona/{d}', [PersonaController::class, 'Bajas']);