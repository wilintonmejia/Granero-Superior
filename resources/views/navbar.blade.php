<nav class=" navbar navbar-expand-lg navbar-dark " style="background-color:#0b8b2b">
   
    <div class="letra collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">  
                <a class="descripcion" href="{{ url('/') }}" ><img class="rounded" height="38" src="{{ url('assets/img/Titulo.png') }}" alt="..."></a>
            </li>

            <li class="nav-item dropdown">        
                <a class=" boton_3" href="{{ url('/descripcion') }} " >Quiénes Somos</a>
            </li>

            <li class="nav-item dropdown">        
                <a  class=" boton_3 dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    Productos    
                </a> 
                <div class="dropdown-menu " aria-labelledby="dropdownMenu2" style ="background-color: Green !important;">
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('/productos') }}"> Listado</a>                
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('productos/registro') }}">Registro</a>
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('productos/consulta') }}">Consultar</a>
                </div>
            </li>
           

            <li class="nav-item dropdown">        
                <a  class=" boton_3 dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    Categorias    
                </a> 

                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style ="background-color: Green !important;">
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('/categorias') }}" >Listado</a>
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('categorias/registro') }}">Registro</a>
                </div>
            </li> 
            
            <li class="nav-item dropdown">        
                <a  class=" boton_3 dropdown-toggle" href="#" id="dropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    Clientes   
                </a> 
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style ="background-color: Green !important;">
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('/clientes') }}">Listado</a>
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('clientes/registro') }}">Registro</a>
                    <a class="dropdown-item descripcion_2 white-text" href="{{ url('clientes/consulta') }}" >Consultar</a>
                </div>
            </li>

        </ul>
    </div>
</nav>