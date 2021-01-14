@extends('principal')
@section('contenido')
    <h1 class=" titulo"> Bienvenidos al Supermercado Granero Superior </h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">     
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>     
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>     
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>   
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('assets/img/101.jpg') }}" class="d-block w-100" alt="500" height ="460">
            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/img/3.jpg') }}" class="d-block w-100" alt="500" height ="460">
            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/img/4.jpg') }}" class="d-block w-100" alt="500" height ="460">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@stop