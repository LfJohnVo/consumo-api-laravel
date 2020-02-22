<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Desarrollador: Luis Fernando Jonathan Vargas Osornio - vojohn95@gmail.com">
    <meta name="Version" content="produccion">
    <title>Prueba API</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{url("/")}}" class="brand-logo">Prueba</a>
        <!--<ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>-->

        <!-- <ul id="nav-mobile" class="sidenav">
             <li><a href="#">Navbar Link</a></li>
         </ul>
         <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
    </div>
</nav>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Respuesta del consumo</h1>
        <div class="row center">
            <h3 class="header col s12 light a-blink">
                @include('flash::message')
                @include('layouts.errors')
            </h3>

            <div class="row center">
                <table class="centered responsive-table">
                    <thead>
                    <tr>
                        @if($count == 8)
                            <th>VIN</th>
                            <th>Marca Fabricante</th>
                            <th>Modelo Vehiculo</th>
                            <th>Año modelo</th>
                            <th>Perdida Total</th>
                            <th>Fecha perdida total</th>
                            <th>Ultimo titulo</th>
                            <th>Fecha Titulo</th>
                        @elseif ($count == 9)
                            <th>VIN</th>
                            <th>Marca Fabricante</th>
                            <th>Modelo Vehiculo</th>
                            <th>Año modelo</th>
                            <th>Salvage</th>
                            <th>Fecha salvage</th>
                            <th>Ultimo titulo</th>
                            <th>Titulo del estado</th>
                            <th>Fecha Titulo</th>
                        @else
                            <h5 class="yellow-text">Sin resultados</h5>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($nodos as $value)
                            <div>
                                <td>{{ $value[0] }}</td>
                            </div>
                        @endforeach
                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="row center">
                <a href="{{url("/")}}" id="download-button"
                   class="btn-large waves-effect waves-light orange">Reintentar</a>
                <a class="btn-large waves-effect waves-light btn" href="{{$path}}" target="_blank">Visualizar XML</a>
                <a class="btn-large waves-effect waves-light blue" href="{!! route('xml', [$ruta]) !!}">Descargar
                    XML</a>
            </div>
            <br><br>

        </div>
    </div>

    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/catto.min.css') }}" rel="stylesheet">
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('js/scrollcat.min.js.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>


</body>
</html>
