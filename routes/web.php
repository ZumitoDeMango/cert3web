<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
/* rutas de home */
Route::get('/',[HomeController::class,'index'])->name('home.index');

/*rutas de Usuario*/
Route::get('/login',[UsuariosController::class,'login'])->name('usuarios.login');
Route::get('/register',[UsuariosController::class,'register'])->name('usuarios.register');
/* rutas de catalog */

/* rutas de account */

use App\Http\Controllers\HomeController;

/* rutas de home */
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
Route::get('/register',[HomeController::class,'register'])->name('home.register');

/* rutas de catalog */

/* rutas de account */

