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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <h1 class="header center orange-text">Consumo de api</h1>
        <div class="row center">
            <h3 class="header col s12 light a-blink">Por favor seleccione una opción</h3>
            @include('flash::message')
            @include('layouts.errors')
            <div class="row center">
                {!! Form::open(['route' => 'consumo', 'method' => 'post']) !!}
                        <div class="input-field col s6">
                            <select class="browser-default" name="vin">
                                <option value="" disabled selected>Elija una opción</option>
                                <option value="1ZVBP8EM7D5276339">1ZVBP8EM7D5276339</option>
                                <option value="3FADP4AJ7EM169194">3FADP4AJ7EM169194</option>
                            </select>
                        </div>
                        <div class="input-field col s6">
                            {!! Form::submit('Enviar', ['class' => 'btn-large waves-effect waves-light orange', 'id' => 'enviar']) !!}
                        </div>
                {!! Form::close() !!}
            </div>
            <br><br>

        </div>
    </div>
</div>

    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/catto.min.css') }}" rel="stylesheet">
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('js/scrollcat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>

    <script>

    </script>

</body>
</html>

