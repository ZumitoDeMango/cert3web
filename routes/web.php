<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('welcome');
});

/* rutas de home */
Route::get('/',[HomeController::class,'index'])->name('home.index');

/*rutas de Usuario*/
Route::get('/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/register',[UsuariosController::class,'register'])->name('usuarios.register');
/* rutas de catalog */

/* rutas de account */
