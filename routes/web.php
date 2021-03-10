<?php

use Illuminate\Support\Facades\Route;



Route::get('/{optional?}', function () {
    return view('layouts.app');
})->name('base');

Route::get('/administracion/usuario/getListUsuarios', 'Administracion\UserController@getListUsuarios');

// ============================================================================================================================
// =================================CREACION DE RUTAS CON CONTROLADOR Y METODOS================================================
// ============================================================================================================================



// Route::get('/home',['as' => 'home', 'uses' => 'PruebaController@home']);


// Route::get('/contactame',['as' => 'contactos','uses' => 'PruebaController@contactos']);

// Route::post('contacto','PruebaController@mensaje');


// Route::get('saludos/{nombre?}', ['as' => 'saludos','uses' => 'PruebaController@saludos'])->where('nombre',"[A-Za-z]+");











