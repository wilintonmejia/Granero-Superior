@extends('principal')
@section('contenido')

<div  class="container">
    <div  class="row">
        <div  class="col-md-4">
        </div>       
        <div  class="col-md-4">
            <div align="center" class="card carta border" style=" width: 25rem;">
                <h2 align="center" class="letra ">{{$productos->nombreProducto}}</h2>
                <img src='{{url("/assets/img/productos/$productos->fotoProducto")}}' class="rounded" alt="..." height="270">
                <div >
                    <h5 class="text letra "> Identificador: {{$productos->id}} </h5>                    
                    <h5 class="text letra "> Cantidad: {{$productos->cantidadProducto}} </h5>
                    <h5 class="text letra "> Precio: {{$productos->precioProducto}} </h5>
                    <h5 class="text letra "> Categoria: #{{$productos->categoria}} {{$productos->nombreCategoria}} </h5>
                </div>
                    <a href='{{url("productos/actualizar/$productos->id")}}' class="boton_2"> Editar </a>
                    <a class="boton_2" href="#" role="button" data-toggle="modal" data-target="#Eliminar">Eliminar</a>      
                    <a href="{{route('listadoProductos')}}"  class="boton_2" >Volver </a>            
                </div>         
        </div>
        <div  class="col-md-4">
        </div>
    </div>
</div>
<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
    <div class="modal-dialog modal-dialog-centered" role="document">    
        <div style="background-color: Yellow !important;" class="modal-content">      
            <div > 
                </br> 
                <h5  style="color: Blue !important" id="exampleModalLongTitle" align="center">¡Cuidado!</h5>        
                                                      
            </div>      
            <div align="center" style="color: Blue !important"> 
                </br>
                ¿Está seguro de eliminar el producto {{$productos->nombreProducto}} del catálogo?
            </div>      
            <div  > 
                </br>
                <a href='{{url("productos/eliminar/$productos->id")}}' class="boton_5" style="color: Blue !important">Si</a>
                <button type="button" class="close boton_6" data-dismiss="modal" aria-label="Close">          
                    <span  style="color: Blue !important;" aria-hidden="true">No</span>        
                </button> 
                    </br> </br> 
            </div>    
        </div>  
    </div> 
</div>
@stop