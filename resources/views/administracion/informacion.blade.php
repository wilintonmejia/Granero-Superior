@extends('principal')
@section('contenido')
    
<div class="container">
       <div class="card bg-dark  mb-3" style="max-width: 100rem;">
            <p class="card-text letra" align="center">Somos un almacén 100% nariñense, comercializadores de productos de la canasta familiar. Trabajamos siempre pensando en nuestros clientes.</p> 
       </div>
       <div class="row">
                <div class="col-md-4"> 
                        <!-- Card -->
                        <div class="card text-white bg-dark  mb-3" style="max-width: 28rem;">
                                <div class="card-header titulo" >MISIÓN</div> 
                                <!-- Card image -->
                                <!--<div class="embed-responsive embed-responsive-16by9">
                                    <video onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" >
                                        <source src="{{ url('assets/img/102.mp4') }}" type="video/mp4"></source>
                                    </video>    
                                </div>-->
                                <!--<div class="embed-responsive embed-responsive-16by9">   
                                    <iframe class="embed-responsive-item" src="{{ url('assets/img/102.mp4') }}" allowfullscreen></iframe> 
                                </div>-->

                                <img class="rounded-circle" height="240" src="{{ url('assets/img/1.jpg') }}" alt="Card image cap">

                                <!-- Card content -->
                                <div class="card-body">
                                    <p class="card-text letra" id="msg" style="color: White !important;" align="justify"> 
                                        Nuestra misión es convertirnos en una cadena de supermercados a nivel nacional al tiempo que ofrecemos un amplio surtido de productos de calidad a unos precios competitivos. <a style="color: Gray !important;" href="#" role="button" data-toggle="collapse" data-target="#mision">Más</a>
                                        <p id="mision" class="letra collapse">El desarrollo de nuestra actividad se realiza teniendo en cuenta la labor de los empleados y el trato personalizado y cercano hacia el cliente.</br></br>A través de un compromiso con el desarrollo local, apostamos por el modelo de franquicia para fortalecer y hacer crecer el proyecto de Supermercados La Despensa apostando por el trabajo en equipo y la colaboración.</p>
                                    </p>
                                </div>

                        </div>
                        <!-- Card -->
                </div>
                <div class="col-md-4"> 
                        <!-- Card -->
                        <div class="card text-white bg-dark  mb-3" style="max-width: 28rem;">
                            <div class="card-header titulo" >VISIÓN</div> 
                            <!-- Card image -->
                            <!--<div class="embed-responsive embed-responsive-16by9">
                                    <video onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" >
                                        <source src="{{ url('assets/img/103.mp4') }}" type="video/mp4"></source>
                                    </video>    
                            </div>-->
                            <img class="rounded-circle" height="240" src="{{ url('assets/img/4.jpg') }}" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body">
                                <p class="card-text letra" id="msg" style="color: White !important;" align="justify"> 
                                	Consolidarnos como una cadena de supermercados cercana, donde el cliente siempre esté bien atendido y pueda realizar su compra de manera agradable y satisfactoria.
                                </p>
                            </div>
                            

                        </div>
                        <!-- Card -->
                </div>
                <div class="col-md-4"> 
                        <!-- Card -->
                        <div class="card text-white bg-dark  mb-3" style="max-width: 28rem;">
                            <div class="card-header titulo" >NUESTROS VALORES</div> 
                            <!-- Card image -->
                            <img class="rounded-circle" height="240" src="{{ url('assets/img/3.jpg') }}" alt="Card image cap">

                            <!-- Card content -->
                            <div class="card-body letra">
                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Calidad">Calidad,</a>
                                <div  class="modal fade" id="Calidad" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">CALIDAD</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            Todos nuestros productos y servicios son siempre merecedores de una valoración excelente por parte de su destinatario    

                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>
                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Excelencia">Excelencia,</a>
                                <div  class="modal fade" id="Excelencia" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">EXCELENCIA</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            Nuestros productos y servicios son dignos de extraordinario aprecio y estimación por parte del mercado y del cliente interno.

                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>

                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Rigurosidad">Rigurosidad,</a>
                                <div class="modal fade" id="Rigurosidad" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">RIGUROSIDAD</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            Tanto nuestros productos y servicios como los procesos de trabajo que los hacen posibles se caracterizan por su propiedad y precisión, derivadas de la intencionalidad explícita de llegar al más alto nivel de exactitud, precisión y consistencia.

                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>

                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Coherencia">Coherencia,</a>
                                <div  class="modal fade" id="Coherencia" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">COHERENCIA</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            La organización, y, por lo tanto, cada uno de nosotros, mantenemos siempre una actitud lógica y consecuente con los valores, la misión y la visión institucional, así como con los postulados y desarrollos de Pedagogía Conceptual.</br> </br>
                                            En los momentos de toma de decisiones, en los procesos de trabajo y en sus respectivos productos es evidente tal conexión, que constituirá el sello y definirá la personalidad institucional.

                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>
                        

                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Pertinencia">Pertinencia,</a>
                                <div  class="modal fade" id="Pertinencia" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">PERTINENCIA</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            La organización asume compromiso y empeña sus esfuerzos en adelantar procesos y generar productos que respondan a la expectativa misional de generar desarrollo social y humano a través de la pedagogía y la innovación.

                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>

                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Aprendizaje">Aprendizaje,</a>
                                <div  class="modal fade" id="Aprendizaje" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">APRENDIZAJE</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            Frente a las responsabilidades que nos han sido asignadas, buscamos siempre:</br></br>
                                            Comprender el valor y sentido que tienen para la organización, para los proyectos específicos de los que forman parte y para cada uno de nosotros como ser humano y como funcionario de la organización.</br></br>
                                            Conocer plenamente en qué consiste la tarea a realizar, los elementos que definen la naturaleza de la labor o responsabilidad.</br></br>
                                            Realizar los más eficientes y eficaces procedimientos para adelantar las acciones que requieran.</br></br>
                                            Pues entendemos que sólo la activación de estas tres dimensiones hace posible la apropiación que nos permite la máxima eficacia y efectividad en el desempeño.


                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>

                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Humildad">Humildad</a>
                                <div  class="modal fade" id="Humildad" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">HUMILDAD</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            Individual y colectivamente, todos tenemos la capacidad de conocer las propias limitaciones y debilidades y de obrar de acuerdo con este conocimiento, lo cual implica reconocer nuestro potencial para ser cada vez mejores y, por lo tanto, estar siempre dispuestos a aprender.

                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>
                                <a>y</a>
                                <a class="valores" href="#" role="button" data-toggle="modal" data-target="#Compromiso">Compromiso Social.</a>
                                <div  class="modal fade" id="Compromiso" tabindex="-1" role="dialog" arialabelledby="exampleModalLongTitle" aria-hidden="true">  
                                    <div class="modal-dialog modal-dialog-centered" role="document">    
                                        <div style="background-color: Black !important;" class="modal-content">      
                                            <div class="modal-header">        
                                                <h5 class="modal-title" id="exampleModalLongTitle" align="center">COMPROMISO SOCIAL</h5>        
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
                                                    <span style="color: White !important;" aria-hidden="true">&times;</span>        
                                                </button>      
                                            </div>      
                                            <div class="modal-body"> 

                                            Asumimos como obligación institucional y personal tomar las decisiones y planear los procesos y las acciones teniendo como criterio fundamental la posibilidad de mejorar las condiciones de vida y promover el desarrollo de las personas y/o de los grupos sociales de nuestro país.</br></br>
                                            Somos líderes en el desarrollo de productos de tamaño familiar.

                                            </div>      
                                            <div class="modal-footer">        
                                            </div>    
                                        </div>  
                                    </div> 
                                </div>
                            </div>
                            </br>

                        </div>
                        <!-- Card -->
                </div>
       </div>
</div> 



<div align="center">
    <a href='{{url()->previous()}}' class="valores" > Regresar </a>
</div>
@stop

