<?php

namespace App\Http\Controllers;

use App\Cambio;
use Illuminate\Http\Request;

class CambioController extends Controller
{
    public function ListarCambios(){

        $cambios = Cambio::all();
        return view('prueba.cambio', compact('cambios'));
    }
}
