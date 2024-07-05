<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //Funciones con retorno de vistas
    public function login(){
        return view('users.login');
    }
    public function register(){
        return view('users.register');
    }
}
