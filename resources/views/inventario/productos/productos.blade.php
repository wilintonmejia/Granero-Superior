@extends('principal')
@section('contenido')
@if(count($productos)===0)
    </br></br></br>
    <h1 class="titulo"> No hay productos registrados </h1>
    </br></br>
    <div align="center"><a class="consultar" href='{{url()->previous()}}'> Regresar </a></div>
    </br></br></br></br></br></br></br></br></br></br></br>
@else
    <h1 class="titulo"> Productos </h1>
    <div class="letra">
                <div class=" dropdown show">        
                    <a  class=" boton_2 dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        Ordenar por    
                    </a> 

                    <div class="dropdown-menu " aria-labelledby="dropdownMenu2" style ="background-color: Green !important;">
                        <a class="dropdown-item descripcion_2 white-text" href='{{ route("porProducto") }}' >Nombre</a>
                        <a class="dropdown-item descripcion_2 white-text" href='{{ route("porCategoria") }}' >Categoria</a>
                        <a class="dropdown-item descripcion_2 white-text" href='{{ route("porPrecio") }}'>Precio</a>
                    </div>
                </div> 
    </div>
    </br></br>
    <div class="container"> 
        <div class="row">
            @foreach($productos as $p)
            <div class="col-md-4">
                <div class="card bg-success borde" style="width: 20rem;">
                    <div class="letra" align="center">
                        <h2 > {{ $p->nombreProducto}} </h2>
                    </div>
                    <img src='{{url("/assets/img/productos/$p->fotoProducto")}}' class="rounded" alt="..." height="200">
                    <div align="center">
                        <h6 class="letra"> Precio: {{$p->precioProducto}} </h6>
                        <h6 class="letra"> {{$p->nombreCategoria}} </h6>
                    </div>
                    <a class="boton_1" href="#" role="button" data-toggle="collapse" data-target="#comprar{{$p->id}}">Comprar</a>
                    <form id="comprar{{$p->id}}" class="letra collapse" action='{{url("productos/comprar")}}' method= "POST">
                        @csrf
                        <!-- Etiquetas de tipo text con un value asignado -->
                        <div class="form-group">
                            <label for="cantidad">¿Cuántos ejemplares desea adquirir?</label>
                            <label style="background-color: Gray !important;">({{$p->cantidadProducto}} disponibles)</label>
                            <input required type="number" min='1' max='{{$p->cantidadProducto}}' id="cantidad" name="cantidad"  class="form-control" placeholder="Cantidad" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                        </div>
                        <!-- Etiquetas de tipo button -->
                        <div align="center"><button type="submit" class="boton_7">Añadir al carrito</button></div>
                    </form>
                    <a href='{{url("productos/detalle/$p->id" )}}' class="boton_1" > Ver detalles </a>                    
                </div>  
            </div>
            @endforeach
        </div>
    </div>
@endif   
@stop