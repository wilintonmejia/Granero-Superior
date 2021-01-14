@extends('principal')
@section('contenido')
@if(count($client)===0)
    </br></br></br>
    <h1 class="titulo"> No hay clientes registrados </h1>
    </br></br>
    <div align="center"><a class="consultar" href='{{url("clientes/registro")}}'> Registrar </a></div>
    </br></br></br></br></br></br></br></br></br></br></br>
@else
    <h1 class="titulo"> CLIENTES </h1>
    <div class="table-responsive-xl">
    <table class="table table-hover table-striped table-dark">
        <thead>
            <tr>
                <!--<th scope="col">#</th>-->
                <th scope="col">NOMBRE</th>
                <th scope="col">IDENTIFICACIÓN</th>
                <!--<th scope="col">DIRECCIÓN</th>
                <th scope="col">TELÉFONO</th>
                <th scope="col">GÉNERO</th>-->
                <th scope="col">IMAGEN CLIENTE</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($client as $c)
                <tr>
                    <td>{{ $c->nombreCliente}}</td>
                    <td>{{ $c->cedulaCliente}}</td>
                    <!--<td>{{ $c->direccionCliente}}</td>
                    <td>{{ $c->telefonoCliente }}</td>
                    <td>{{ $c->generoCliente}}</td>-->
                    <td><img src='{{url("/assets/img/clientes/$c->fotoCliente")}}' class="rounded" alt="..." height="100"></td>
                    <td> <a href='{{url("clientes/detalle/{$c->id}")}}' class="boton_4" > Ver detalles </a>
                    <a href='{{url("clientes/actualizar/{$c->id}")}}' class="boton_4"> Editar </a>
                    <a class="boton_4" href="#Eliminar{{$c->id}}" role="button" data-toggle="modal" data-target="#Eliminar{{$c->id}}">Eliminar</a>
                        <div class="modal fade" id="Eliminar{{$c->id}}" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                            <div class="modal-dialog modal-dialog-centered" role="document">    
                                <div style="background-color: Yellow !important;" class="modal-content">      
                                    <div > 
                                        </br> 
                                    <h5  style="color: Blue !important" id="exampleModalLongTitle" align="center">¡Cuidado!</h5>        
                                                      
                                    </div>      
                                    <div align="center" style="color: Blue !important"> 
                                        </br>
                                        ¿Está seguro de eliminar al cliente {{$c->nombreCliente}}?
                                    </div>      
                                    <div > 
                                        </br>
                                        <button type="button" class="close boton_6" data-dismiss="modal" aria-label="Close">          
                                            <span  style="color: Blue !important;" aria-hidden="true">No</span>        
                                        </button> 
                                        <a href='{{url("clientes/eliminar/$c->id")}}' class="boton_5" >Si</a>
                                        </br> </br> 
                                    </div>    
                                </div>  
                            </div> 
                        </div>
                    <!--<a href='{{url("clientes/eliminar/{$c->id}")}}' class="boton_4" > Eliminar </a></td>-->
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endif
@stop

