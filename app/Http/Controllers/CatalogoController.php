<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auto;
use App\Models\marca;
use App\Models\tipoauto;

class CatalogoController extends Controller
{
    public function index(){
        $autos = auto::all();
        return view('catalog.index', compact('autos'));
    }
}
