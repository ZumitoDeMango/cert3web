<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\UsuariosController;

/* rutas de home */
Route::get('/',[HomeController::class,'index'])->name('home.index');

/* rutas de catalogo */

/* rutas de usuarios */
Route::get('/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/register',[UsuariosController::class,'register'])->name('usuarios.register');