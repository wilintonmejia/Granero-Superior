@extends('principal')
@section('contenido')
    </br></br></br>
    <h1  class="titulo"> Formulario de Consulta </h1>
    <form class="letra " action='{{url("productos/consulta")}}' method= "POST">
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="codigo">Código del producto</label>
            <input required type="number" id="codigo" name="codigo"  class="form-control" placeholder="ISBN" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
        </div>
         <!-- Etiquetas de tipo button -->
        <div align="center"><button type="submit" class="consultar">Consultar</button></div>
    </form>
    </br></br></br></br></br></br></br></br>
@stop