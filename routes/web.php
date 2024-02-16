<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'index'])->name('welcome');
Route::get('/usuarios/create', [UsuarioController::class, 'createUser'])->name('usuario.create');
Route::get('usuarios/cadastrados', [UsuarioController::class, 'cadastrados'])->name('usuario.cadastrados');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuario.store');;
Route::get('/usuarios/buscar', [UsuarioController::class, 'buscarUsuario'])->name('usuario.buscar');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuario.delete');
Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('usuarios/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

