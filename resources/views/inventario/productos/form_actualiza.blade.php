@extends('principal')
@section('contenido')
<h1  class="titulo "> Formulario de Actualización </h1>

<form class="letra" style="background-color: #66bb6a;" action='{{url("productos/actualizar/$producto->id")}}' enctype="multipart/form-data" method= "POST">
    @csrf
    <label for="nombrePro">Nombre </label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="text" id="nombrePro" name="nombrePro" value="{{$producto->nombreProducto}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
    </div>

    <label for="cantidadPro">Cantidad </label>
       
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="number" id='cantidadPro' name='cantidadPro' value="{{$producto->cantidadProducto}}" min='1' max='1000' class="form-control" placeholder="Cantidad" required>
    </div>

    <label for="precioPro">Precio </label>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">@</span>
        </div>
        <input type="number" id='precioPro' name='precioPro' value="{{$producto->precioProducto}}" min='100'  class="form-control" placeholder="Cantidad" required>
    </div>

    <div class="input-group mb-3">
        <div class="form-group">
            <strong>Imagen:</strong></br>
            <input type="file" name="urlfoto">
        </div>
    </div>

    <label for="productos">Tipo de Producto</label> 
    <select class="custom-select-sm" id="productos" name="categorias">
        @foreach($category as $c)
            @if($c->id === $producto->categoria)
                <option value="{{$c->id}}" selected>{{$c->nombreCategoria}}</option>
            @else
                <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
            @endif
        @endforeach
    </select>
    </br></br</br></br>
    <button type="submit" class="boton_personalizado">Actualizar</button>
    <button type="reset" class="boton_personalizado">Restablecer</button>
    <a href="javascript: history.go(-1)" role="button" class="boton_personalizado_1">Cancelar</a>
</form>

@stop