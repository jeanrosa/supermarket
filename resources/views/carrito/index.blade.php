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
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/feffe431be.js"></script>
    <link rel="shortcut icon" href="{{asset('imagenes/favicon.png')}}">
    <script src="{{asset('jquery/jquery.js')}}"></script>
    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
                d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="//v2.zopim.com/?3x21vpHB1nF8c7SG7WfaavDosg0fr6fu";z.t=+new Date;$.
                    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Verdana';
            background-color:white;

        }
        .fa-btn {
            margin-right: 6px;
        }
        .profile-image{
            width: 30px;
            height: 30px;
            border: 2px solid #51D2B7;
        }
        .hola{
            background-color: #89c53f;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            /*border-radius:10px;*/

        }

    </style>
</head>
<body id="app-layout">
<div class="container-fluid">

    <div class="row">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top hola" role="navigation">
            {{--<div class="container">--}}
                    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!--MENU -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" id="bs-example-navbar-collapse-1 navegacion-sm">
                <ul class="nav navbar-nav" id="menu1">
                    <li><a style="color: white;" href="{{URL::to('/home')}}">{{ trans('welcome.home') }}</a></li>
                    <li><a style="color: white;" href="{{URL::to('/home')}}">{{trans('welcome.catalogo')}}</a></li>
                    <li><a style="color: white;" href="{{URL::to('trayectoria')}}">{{trans('welcome.empresa')}}</a></li>
                    <li><a style="color: white;" href="{{URL::to('condiciones')}}">{{trans('welcome.comprar')}}</a></li>
                    @if(Auth::check())
                        <li><a style="color: white;" href="{{URL::to('contacto')}}">Contacto</a></li>
                    @endif
                    @if(Auth::check() && Auth::user()->id_tipo_usuario == 7)
                        <li><a style="color: white;" href="{{URL::to('proveedor/oferta')}}">Ofertar</a></li>
                    @endif
                    @if(Auth::check() && Auth::user()->id_tipo_usuario == 1)
                        <li class="dropdown">
                            <a class="dropdown-toggle info" data-toggle="dropdown" href="#" style="color:white">Tablas Básicas
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu hola">
                                <li><a href="{{URL::to('usuario')}}" style="color:white;" ><i class="fa fa-industry"></i>Usuarios</a></li>
                                <li><a href="{{URL::to('categoria')}}" style="color:white;" ><i class="fa fa-registered"></i>Categorias</a></li>
                                <li><a href="{{URL::to('subcategoria')}}" style="color:white;" ><i class="fa fa-registered"></i>Subcategorias</a></li>
                                <li><a href="{{URL::to('producto')}}" style="color:white;" ><i class="fa fa-bus"></i>Productos</a></li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::check())
                        <li><a style="color: white;" href="{{URL::to('confirmar_compra/'.Auth::user()->id)}}">Confirmar Compra</a></li>
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

                            <a id="btn" style="color: white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="{{asset('usuarios/'.Auth::user()->foto)}}" class="profile-image img-circle">
                                {{ Auth::user()->nombre }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu hola" role="menu">
                                <li><a style="color:white;" href="{{ url('/perfil') }}"><i class="fa fa-btn fa-user"></i>Mi Cuenta</a></li>
                                <li><a style="color:white;" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            {{--</div>--}}
                    <!-- /.container -->
        </nav>
    </div>

    @if(Session::has('mensaje'))
        <div class="alert alert-success">{{Session::get('mensaje')}}</div>
    @endif

    {{--<div style="margin-top: 100px">
        <a href="{{URL::to('presupuesto')}}" class="btn btn-success"><i class="fa fa-printer"></i>Presupuesto</a>
    </div>--}}


    <div class="panel panel-success" style="margin-top:100px">
        <div class="panel-heading">Carrito</div>
        <div class="panel-body">
            <table class="table table-responsive table-hover table-bordered">
                <tr>
                    <th class="text-center">Producto</th>
                    {{--<th>Numero Carrito</th>--}}
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Precio</th>
					<th class="text-center">Total Producto</th>
                    <th class="text-center">Eliminar</th>
                </tr>
				<?php
				$total=0;
				?>
                @foreach($carrito as $cart)
                    <tr class="text-center">
                        <td>{{$producto=$cart->producto}}</td>
                        {{--<td>{{$carrito=$cart->id_carrito}}</td>--}}
                        <td>{{$cantidad=$cart->cantidad}}</td>
                        <td>{{$precio=$cart->precio}} Bs.F</td>
						<?php
							
							$total_producto=$cart->cantidad*$cart->precio;
							$total+=$total_producto;					
						?>
                        <td>{{$total_producto}} Bs.F</td>
                        <td>
                            {!! Form::open(['url'=>'eliminar/carrito/'.$cart->id_carrito_producto,'method'=>'delete']) !!}
                            <button class="glyphicon glyphicon-remove btn btn-danger btn-xs"></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
					
                @endforeach
					<td colspan="4" align="right">
						<b>Total</b>  {{$total}}
					</td>
            </table>
        </div>
		
					{!! Form::open(['action'=>'CarritoController@compra']) !!}
                         
							{!! Form::hidden('carrito',Auth::user()->id) !!}
						
							{{--{!! Form::hidden('producto',$producto) !!}--}}
					
							{!! Form::hidden('total',$total) !!}

							{!! Form::hidden('usuario',Auth::user()->id) !!}
							
							 <div class="col-md-6 col-md-offset-5" style="margin-top: 10px">
								{!! Form::submit('Comprar',['class'=>'btn btn-success']) !!}
								{!! link_to('/home','Volver atras',['class'=>'btn btn-danger']) !!}
							</div>
                    {!! Form::close() !!}
		
    </div>

    {{--</div>--}}
            <!-- /.container -->

    <div class="container-fluid">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
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
                        <li><a><i class="fa fa-rss" target="_blank"></i>RSS</a></li>
                        <li><a href="https://youtube.com/cclsupermark" target="_blank"><i class="fa fa-youtube"></i>Youtube</a></li>
                        <li><a href="https://instagram.com/cclsupermark" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; SuperMarket 2016 by Murgil Technology C.A.</p>
            </div>
        </footer>

    </div>

    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
        $('#btn').click(function() {
            //Now just reference this button and change CSS
            $(this).css('background-color','#89c53f');
        });


        $('.list-group-item').mouseover(function() {
            //Now just reference this button and change CSS
            $(this).css('background-color','#89c53f');
        });
    </script>
</body>
</html>
