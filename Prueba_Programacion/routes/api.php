<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::post('/persona', [PersonaController::class, 'Altas']);
Route::delete('/persona/{d}', [PersonaController::class, 'Bajas']);
Route::put('/persona/{d}', [PersonaController::class, 'Modificacion']);
Route::get('/persona', [PersonaController::class, 'Listar']);
Route::get('/persona/{d}', [PersonaController::class, 'Busqueda']);
