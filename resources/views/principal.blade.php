<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Granero Superior</title>
        <!-- Cargar archivos de estilos -->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/style.css') }}" rel="stylesheet"> 
        <link href="{{ url('/assets/bootstrap/css/mdb.min.css') }}" rel="stylesheet"> 

    </head>
    <body style="background-color: Darkgreen !important;">
        @include('navbar')
        <div class = "container">
            @yield('contenido')
        </div>
        @include('footer')

        <!-- Cargar archivos Javascript -->
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/jquery.min.js') }}"></script> 
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/mdb.min.js') }}"></script>
    </body>
</html>