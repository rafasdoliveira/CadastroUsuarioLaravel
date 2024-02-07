<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'index']);
Route::get('/usuarios/create', [UsuarioController::class, 'createUser']);
Route::get('usuarios/cadastrados', [UsuarioController::class, 'cadastrados']);
Route::get('/usuarios/login', [UsuarioController::class, 'login']);
Route::post('/usuarios', [UsuarioController::class, 'store']);


