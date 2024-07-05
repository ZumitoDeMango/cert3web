<?php
namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    //Funciones con retorno de vistas
    public function login(){
        return view('users.login');
    }

    public function register(){
        return view('users.register');
    }

    //Validar inicio de sesion
    public function autenticar(Request $request)
    {
        $iniciosesion = $request->only(['email','contraseña']);

        if(Auth::attempt($iniciosesion))
        {
            //credenciales correctas
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }
        return back()->withErrors('Revise los datos ingresados')->onlyInput('email');
    }
    
}
