@extends('principal')
@section('contenido')
@if(count($categorias)===0)
    </br></br></br>
    <h1 class="titulo"> No se ha registrado ninguna categoría </h1>
    </br></br>
    <div align="center"><a class="consultar" href='{{url()->previous()}}'> Regresar </a></div>
    </br></br></br></br></br></br></br></br></br></br></br>
@else
    <h1 class="titulo"> Categorías de Productos </h1>
    <div class="letra">
    <table class="table table-hover bg-primary" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE CATEGORÍA</th>
                <th scope="col">DESCRIPCIÓN </th>
                <th scope="col">ACCIONES </th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $c)        
            <tr  >
                <td> {{ $c->id }} </td>              
                <td> {{ $c->nombreCategoria }} </td>
                <td> {{ $c->descripcion }}</td>
                <td><a href='{{url("categorias/actualizar/$c->id")}}' class="boton_4"> Editar </a>
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
                                        ¿Está seguro de eliminar la categoría {{$c->nombreCategoria}} de la lista?
                                    </div>      
                                    <div > 
                                        </br>
                                        <button type="button" class="close boton_6" data-dismiss="modal" aria-label="Close">          
                                            <span  style="color: Blue !important;" aria-hidden="true">No</span>        
                                        </button> 
                                        <a href='{{url("categorias/eliminar/$c->id")}}' class="boton_5" >Si</a>
                                        </br> </br> 
                                    </div>    
                                </div>  
                            </div> 
                        </div>
                </td>   
            </tr>            
        @endforeach
        </tbody>
    </table>
    </div>
        
@endif    
@stop