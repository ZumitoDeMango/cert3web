<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream

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
>>>>>>> Stashed changes
