<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
 public function getListUsuarios(Request $request){
     if(!Request->ajax()) return redirect('/');

     $cNombre = $request->cNombre;
     $cUsuario  = $request->cCuadro;
     $cCorreo = $request->cCorreo;
     $cEstado = $request->cEstado;

     $cNombre = ($cNombre == NULL) ? ($cNombre = '') : $cNombre;
     $cUsuario = ($cUsuario == NULL) ?($cUsuario = '') : $cUsuario;
     $cCorreo = ($cCorreo == NULL) ? ($cCorreo = ''): $cCorreo;
     $cEstado  ($cEstado == NULL) ? ($cEstado = ''): $cEstado;

     DB::statement('call sp_Usuario_getListUsuarios ( ?,?,?,?)')'',

     [
         $cNombre,
         $cUsuario,
         $cCorreo,
         $cEstado,
     ]);
    
 }

}
