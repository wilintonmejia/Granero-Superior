@extends('principal')
@section('contenido')

<div  class="container">
    <div  class="row">
        <div  class="col-md-4">
        </div>       
        <div  class="col-md-4">
            <div align="center" class="card carta border" style=" width: 25rem;">
                <h2 align="center" class="letra ">{{$client->nombreCliente}}</h2>
                <img src='{{url("/assets/img/clientes/$client->fotoCliente")}}' class="rounded" alt="..." height="270">
                <div >
                    <h5 class="text letra "> Cédula: {{$client->cedulaCliente}} </h5>                    
                    <h5 class="text letra "> Dirección: {{$client->direccionCliente}} </h5>
                    <h5 class="text letra "> Teléfono: {{$client->telefonoCliente}} </h5>
                    <h5 class="text letra "> Género: {{$client->generoCliente }} </h5>
                </div>
                    <a href='{{url("clientes/actualizar/$client->id")}}' class="boton_2"> Editar </a>
                    <!--<a href='{{url("clientes/eliminar/$client->id")}}' class="boton_2" > Eliminar </a>-->
                    <a class="boton_2" href="#" role="button" data-toggle="modal" data-target="#Eliminar">Eliminar</a>                       
                    <a href='{{url()->previous()}}'  class="boton_2" >Volver </a>            
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
                ¿Está seguro de eliminar éste cliente?
            </div>      
            <div  > 
                </br>
                <a href='{{url("clientes/eliminar/$client->id")}}' class="boton_5" style="color: Blue !important">Si</a>
                <button type="button" class="close boton_6" data-dismiss="modal" aria-label="Close">          
                    <span  style="color: Blue !important;" aria-hidden="true">No</span>        
                </button> 
                </br> </br> 
            </div>    
        </div>  
    </div> 
</div> 
@stop