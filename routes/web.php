<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

/* rutas de home */
Route::get('/',[HomeController::class,'index'])->name('home.index');

/*rutas de Usuario*/

Route::get('/usuarios/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/usuarios/register',[UsuariosController::class,'register'])->name('usuarios.register');

/* rutas de catalog */



