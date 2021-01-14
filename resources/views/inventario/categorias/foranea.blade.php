@extends('principal')
@section('contenido')
    </br></br></br>
    @if($foranea===1)
        <h1 class="titulo">¡No se puede eliminar la categoría {{$category->nombreCategoria}} ya que tiene {{$foranea}} producto registrado!</br>Primero debe eliminar ése producto </h1>
    @else
        <h1 class="titulo">¡No se puede eliminar la categoría {{$category->nombreCategoria}} ya que tiene {{$foranea}} productos registrados!</br>Primero debe eliminar ésos productos </h1>
    @endif
    </br></br>
    <div align="center"><a class="consultar" href='{{url()->previous()}}'> Regresar </a></div>
    </br></br></br></br></br></br></br></br></br></br></br>
@stop
