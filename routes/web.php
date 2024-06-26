<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* rutas */
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/login',[HomeController::class,'login'])->name('home.login');
Route::get('/register',[HomeController::class,'register'])->name('home.register');