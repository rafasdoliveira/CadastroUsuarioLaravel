<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'index'])->name('welcome');
Route::get('/usuarios/create', [UsuarioController::class, 'createUser'])->name('usuario.create');
Route::get('usuarios/cadastrados', [UsuarioController::class, 'cadastrados'])->name('usuario.cadastrados');
Route::get('/usuarios/login', [UsuarioController::class, 'login'])->name('usuario.login');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuario.store');; //Você tem que nomear a sua rota store também
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);
Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'edit']);
Route::put('usuarios/update/{id}', [UsuarioController::class, 'update']);

