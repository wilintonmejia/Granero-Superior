@extends('principal')
@section('contenido')
    </br></br></br>
    <h1  class="titulo"> Formulario de Consulta </h1>
    <form class="letra " action='{{url("clientes/consulta")}}' method= "POST">
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="cedulaCli"> Identificación del Cliente</label>
            <input required type="number" id="cedulaCli" name="cedulaCli"  class="form-control" placeholder="Número de Identificación" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
        </div>
         <!-- Etiquetas de tipo button -->
        <div align="center"><button type="submit" class="consultar">Consultar</button></div>
    </form>
    </br></br></br></br></br></br></br></br>
@stop