<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SuperMarket- @yield('titulo')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('fonts-awesome/font-awesome.min.css')}}" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('fonts-awesome/fonts-googleapis.css')}}">
    {{--<link rel="stylesheet" href="{{asset('css/menu.css')}}">--}}
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" type="text/css" href="{{asset('webfonts/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/inicio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="{{asset('js/irarriba.js')}}"></script>
    <script src="https://use.fontawesome.com/feffe431be.js"></script>
    <link rel="shortcut icon" href="{{asset('imagenes/favicon.png')}}">
    <script src="{{asset('jquery/jquery.js')}}"></script>
    <script src="{{asset('bootstrap_file/js/plugins/sortable.min.js')}}"></script>
    <script src="{{asset('bootstrap_file/js/plugins/purify.min.js')}}"></script>
    <script src="{{asset('bootstrap_file/js/plugins/sortable.min.js')}}"></script>
    <script src="{{asset('bootstrap_file/js/plugins/canvas-to-blob.min.js')}}"></script>
    <script src="{{asset('bootstrap_file/css/fileinput.min.css')}}"></script>
    <script src="{{asset('bootstrap_file/js/fileinput.min.js')}}"></script>
    <script src="{{asset('bootstrap_file/js/locales/fa.js')}}"></script>
    <script src="{{asset('bootstrap_file/js/locales/es.js')}}"></script>
    <script src="{{asset('jquery/jquery.js')}}"></script>
    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
                d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="//v2.zopim.com/?3OcXmZwAB8kmemmbGyMYDfzlTNkhzQY3";z.t=+new Date;$.
                    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'helvetica';
            background-color:white;

        }

        .fa-btn {
            margin-right: 6px;
        }
        .profile-image{
            width: 30px;
            height: 30px;
            border: 2px solid #89c53f;
        }
        .hola{
            background-color: white;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            /*border-radius:10px;*/
        }

    </style>
</head>

<body id="app-layout">

<!--Menu mas arriba-->
<nav class="navbar navbar-static-top navbar1" role="navigation">
    @if(Auth::guest())
        <a class="barra1" href="{{URL::to('crear_usuario')}}"><button class="btn botonr navbar-right">REGISTRATE</button></a>
        <a class="barra1" href="{{URL::to('/login')}}"><button class="btn botoni navbar-right">INGRESA</button></a>
    @endif
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar / Ocultar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!--MENU -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-example-navbar-collapse-1 navegacion-sm">
            <ul class="nav navbar-nav" id="menu1">
                <li><a style="color: black;" href="{{URL::to('/home')}}">{{ trans('welcome.home') }}</a></li>
                <li><a style="color: black;" href="{{URL::to('/home')}}">{{trans('welcome.catalogo')}}</a></li>
                <li><a style="color: black;" href="{{URL::to('trayectoria')}}">{{trans('welcome.empresa')}}</a></li>
                <li><a style="color: black;" href="{{URL::to('condiciones')}}">{{trans('welcome.comprar')}}</a></li>
                @if(Auth::check())
                    <li><a style="color: black;" href="{{URL::to('contacto')}}">Contacto</a></li>
                @endif
                @if(Auth::check() && Auth::user()->id_tipo_usuario == 7)
                    <li><a style="color: green;" href="{{URL::to('proveedor/oferta')}}">Ofertar</a></li>
                @endif
                @if(Auth::check() && Auth::user()->id_tipo_usuario == 1)
                    <li class="dropdown">
                        <a  class="dropdown-toggle info" data-toggle="dropdown" href="#" style="color:green">Tablas Básicas
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu hola">
                            <li><a href="{{URL::to('usuario')}}" style="color:green;" ><i class="fa fa-industry"></i>Usuarios</a></li>
                            <li><a href="{{URL::to('categoria')}}" style="color:green;" ><i class="fa fa-registered"></i>Categorias</a></li>
                            <li><a href="{{URL::to('subcategoria')}}" style="color:green;" ><i class="fa fa-registered"></i>Subcategorias</a></li>
                            <li><a href="{{URL::to('producto')}}" style="color:green;" ><i class="fa fa-bus"></i>Productos</a></li>
                        </ul>
                    </li>
                @endif
                @if(Auth::check())
                    <li><a style="color: green;" href="{{URL::to('confirmar_compra/'.Auth::user()->id)}}">Confirmar Compra</a></li>
                @endif
                {{--<li><a href="{{ url('lang', ['en']) }}">En</a></li>
                                    <li><a href="{{ url('lang', ['es']) }}">Es</a></li>--}}
            </ul>
            {!! Form::open(['url'=>'busqueda','method'=>'GET','class'=>'navbar-form navbar-left','role'=>'search']) !!}
            <div class="form-group">
                {!!Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Busqueda','id'=>'buscar'])!!}
            </div>
            <button class="glyphicon glyphicon-search btn btn-primary"></button>
            {!! Form::close() !!}
            <ul class="nav navbar-nav navbar-right" id="menu1">
                <!-- Authentication Links -->
                @if (Auth::check())
                    <li class="dropdown">

                        <a id="btn" style="color: darkslategrey" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="{{asset('usuarios/'.Auth::user()->foto)}}" class="profile-image img-circle">
                            {{ Auth::user()->nombre }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu hola" role="menu">
                            <li><a style="color:darkslategrey;" href="{{ url('/perfil') }}"><i class="fa fa-btn fa-user"></i>Mi Cuenta</a></li>
                            <li><a style="color:darkslategrey;" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </div>
    </div>
</nav>


<section class="bloque2">
    <!--Redes Socials--->
    <div id="social" class="col-md-12">
        <a class="facebookBtn smGlobalBtn" href="#" target="_blank"></a>
        <a class="twitterBtn smGlobalBtn" href="https://twitter.com/cclsupermark" target="_blank"></a>
        <a class="youtubeBtn smGlobalBtn" href="https://youtube.com/cclsupermark" target="_blank"></a>
        <a class="instagramBtn smGlobalBtn" href="https://instagram.com/cclsupermark" target="_blank"></a>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="">
                <img class="logo" src="{{asset('imagenes/Logo-web.png')}}">
            </div>
        </div>
        <div class="col-md-8">
            <div class="bolsa">
                <img  class="img-responsive" src="{{asset('iconos/Logo2.png')}}">
            </div>
            <div>
                <h2>DISPONIBLE</h2>
                <p class="alinear">Super Mark Cuenta con una gran variedad de kits que se adaptan a tus exigencias y presupuesto.
                    Actualmente se encuentran disponibles para la venta y distribucion en el territorio nacional.</p>

                <a href="{{URL::to('subcategorias/1')}}"><button class="btn btn-success"> VER KITS</button></a>
            </div>
        </div>
    </div>
</section>
<hr class="divisor">
@yield('content')
<div class="container-fluid">
    <hr class="divisor">
    <!-- Footer -->
    <footer>
        <div class="col-lg-12">
            <div class="col-md-3">
                <ul>
                    <h4>Nuestras Ofertas</h4>
                    <li><a>Inicio</a></li>
                    <li><a>Promociones Especiales</a></li>
                    <li><a>Compre Ahorrando</a></li>
                    <li><a href="{{URL::to('crear_proveedor')}}">Proveedores</a></li>
                    @if(Auth::user())
                        <li><a href="{{URL::to('comentarios')}}">Comentarios</a></li>
                    @endif
                    <li><a>Contactos</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <h4>Su Cuenta</h4>
                    <li><a>Envios y Devoluciones</a></li>
                    <li><a href="{{URL::to('crear_usuario')}}">Crear una Cuenta</a></li>
                    <li><a href="{{URL::to('login')}}">Iniciar Sesión</a></li>
                    <li><a>Hazte Socio Uniagro</a></li>
                    <li><a>Tarjetas CCL Card</a></li>
                    <li><a>Conoce Sobre Nosotros</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul>
                    <h4>Políticas y Terminos</h4>
                    <li><a>Terminos de Uso</a></li>
                    <li><a>Politicas de Privacidad</a></li>
                    <li><a>Politicas de Compras</a></li>
                    <li><a>Politicas de Suministro</a></li>
                    <li><a>Politicas de Registro y Suscripción</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul>
                    <h4>SuperMark Network</h4>
                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                    <li><a href="https://twitter.com/cclsupermark" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
                    <li><a href="https://youtube.com/cclsupermark" target="_blank"><i class="fa fa-youtube"></i>Youtube</a></li>
                    <li><a href="https://instagram.com/cclsupermark" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <h4>Copyright &copy; SuperMarket 2016 by Murgil Technology C.A.  <span class="glyphicon glyphicon-circle-arrow-up glyphicon1 irarriba"></span> </h4>
        </div>
    </footer>
</div>

    <!-- JavaScripts -->
    <script src="{{asset('jquery/jquery.js')}}" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="{{asset ('moments/moment.js')}}"></script>
    <script src="{{asset ('moments/locale/es.js')}}"></script>
    <script src="{{asset('bootstrap/js/transition.js')}}"></script>
    <script src="{{asset ('bootstrap/js/collapse.js')}}"></script>
    <script src="{{asset ('datepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

    <script type="text/javascript">
        $('#btn').click(function() {
            //Now just reference this button and change CSS
            $(this).css('background-color','white');
        });


        $('.list-group-item').mouseover(function() {
            //Now just reference this button and change CSS
            $(this).css('background-color','white');
        });
    </script>
</body>
</html>
