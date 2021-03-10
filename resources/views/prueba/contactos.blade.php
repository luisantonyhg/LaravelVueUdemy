@extends('layouts.prueba')

@section('contenido')
<h1>Contactos</h1>

@if(session()->has('info'))

<h3>{{session('info')}}</h3>

@else

<form method="POST" action="contacto">
{{-- MIDDLEWARES --}}
{!!csrf_field()!!}

<p>
<label for="nombre">
Nombre
<input type="text" name="nombre" value="{{old('nombre')}}">
{!! $errors->first('nombre', '<span class=error>:message</span>')!!}
</label>
</p>

<p>
<label for="email">
email
<input type="email" name="email" value="{{old('email')}}">
{!!$errors->first('email','<span class=error>:message</span>')!!}
</label>
</p>


<p>
<label for="mensaje">
mensaje
<textarea name="mensaje">{{old('mensaje')}}</textarea>
{!!$errors->first('mensaje','<span class=error>:message</span>')!!}
</label>
</p>

<input type="submit" value="enviar">
</form>
<hr>

@endif



@endsection
