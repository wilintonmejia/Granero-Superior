@extends('principal')
@section('contenido')
<div class="container">
    <br> <br>
    <h1 class="titulo"> Formulario de Actualización </h1>
    <form class="letra" style="background-color: #66bb6a;" action ='{{url("categorias/actualizar/$category->id")}}' method="POST">
        @csrf
        <label for="nonbreCat">Nombre Categoría</label> 
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre" aria-label="nombre" aria-describedby="basic-addon1" id="nombreCat" name="nombreCat" value="{{$category->nombreCategoria}}" required>
        </div>
        <label for="descripcionCat">Descripción</label> 
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion" aria-describedby="basic-addon1" id="descripcionCat" name="descripcionCat" value="{{$category->descripcion}}" required>
        </div>
        <button type="submit" class="boton_personalizado">Actualizar</button> 
	<button type="reset" class="boton_personalizado">Restablecer</button>
    	<a href='{{url()->previous()}}' role="button" class="boton_personalizado_1">Cancelar</a>
    </form>
</div>
</br></br></br></br></br></br></br></br>
@stop