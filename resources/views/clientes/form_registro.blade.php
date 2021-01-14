@extends('principal')
@section('contenido')
        <h1 class="titulo "> Formulario de Registro </h1>
        <form class="letra" style="background-color: #66bb6a;" action='{{url("clientes/registro")}}' enctype="multipart/form-data" method= "POST">
            @csrf
            <!-- Etiquetas de tipo text con un value asignado -->
            <label for="nombreCli">Nombres y Apellidos</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" id="nombreCli" name="nombreCli"  class="form-control" placeholder="Nombre del Cliente" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>

            <!-- Etiquetas de tipo number -->
            <label for="IdCli">Identificación </label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="number" id='IdCli' name='IdCli'  class="form-control" placeholder="Número de Identificación" required>
            </div>

            <label for="dirCli">Domicilio</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" id="dirCli" name="dirCli"  class="form-control" placeholder="Dirección del Cliente" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>

            <label for="telCli">Teléfono</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" id="telCli" name="telCli"  class="form-control" placeholder="Contacto del Cliente" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            </div>

            <label for="clientes">Género</label> 
            <select class="custom-select-sm" id="clientes" name="clientes">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
            </select>

            <div class="input-group mb-3">
                <div class="form-group">
                    <strong>Imagen:</strong></br>
                    <input type="file" name="urlfoto" required>
                </div>
            </div>
            <button type="submit" class="boton_personalizado">Registrar</button>
            <button type="reset" class="boton_personalizado">Limpiar</button>
            <a href='{{url()->previous()}}' role="button" class="boton_personalizado_1">Cancelar</a>
        </form>
        </br>
@stop