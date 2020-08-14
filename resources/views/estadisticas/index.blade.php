<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistema de Control Almacen @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <script src="{{asset ('jquery/jquery.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('moments/moment.js')}}"></script>
    <script src="{{asset('bootstrap/js/transition.js')}}"></script>

    <script src="{{asset ('bootstrap/js/collapse.js')}}"></script>
    <script src="{{asset ('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.14.30/js/bootstrap-datetimepicker.min.js')}}"></script>
    {{--<link rel="shortcut icon" href="{{asset('images/estrella-trans.ico')}}">--}}
</head>
<body>
<div class="container">
    {{--<img src="{{asset('images/banner.png')}}" width="1150px" height="200px" class="img-responsive">--}}
    <ul class="nav nav-tabs">
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Tipos de Estadisticas<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li role="presentation"><a href="{{URL::to('estadisticas/prueba')}}">1</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">2</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">3</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">4</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">5</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">6</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">7</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">8</a></li>
                <li role="presentation"><a href="{{URL::to('')}}">9</a></li>
                <li role="presentation"><a href="{{URL::to('/home')}}">Salir</a></li>
            </ul>
        </li>
    </ul>


    @yield('estadisticas')

    @stack('scripts')
</div>
<footer style="margin-bottom:100px">
    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p style="text-align: center;">Sitio Web Desarrollado Bajo la Filosofia del Software Libre<br>
                Oficina de Tecnologia, Informatica y Telecomunicaciones del Gobierno del Distrito Capital
            </p>
        </div>
    </div>
</footer>
</body>
</html>