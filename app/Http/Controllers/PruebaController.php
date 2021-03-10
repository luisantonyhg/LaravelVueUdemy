<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;

class PruebaController extends Controller
{
    //EL METODO CONSTRUCTOR ENVIA LOS DATOS DEL FORMULARIO
    //APLICANDO UN MIDDLEWARE A UN CONTROLADOR
    //'ONLY' ES SOLO PARA UNO
    // 'EXCEPT' ES PARA TODOS MENOS A UNO

    public function __construct()

    {
        $this->middleware('example',['only' => ['', '']]);

    }


    public function home()

    {
        return response('contenido de la respuesta', 201)
        ->header('X-TOKEN', 'secret')
        ->header('X-TOKEN','secret-2')
        ->cookie('X-COOKIE', 'secret');

    }

    public function contactos()

    {

        return view('prueba.contactos');
    }

    public function mensaje(CreateMessageRequest $request) // USANDO EL REQUEST SOLO PARA UN METODO

    {
       $data = $request->all(); //DEVUELVE TODOS LOS DATOS DEL FORMULARIO
       return back()->with('info', 'Tu mensaje ha sido enviado correctamente');  //REDIRECCIONA A ESTE MENSAJE O RUTA

    }

    public function saludos($nombre = 'invitado')

    {
        return view('prueba.saludos', compact('nombre'));
    }
}


