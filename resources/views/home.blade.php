@extends('layouts.app')

@section('content')

	<div>
		@if(Session::has('mensaje'))
				<div class="alert alert-success">{{Session::get('mensaje')}}</div>
		@endif
	</div>
    <div class="container">
        <br>
        <div class="col-md-12" align="center">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                        <img src="{{asset('imagenes/im1.jpg')}}" alt="">
                    </div>

                    <div class="item">
                        <img src="{{asset('imagenes/im2.jpg')}}" alt="">
                    </div>

                    <div class="item">
                        <img src="{{asset('imagenes/im3.jpg')}}" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    {{--<h2>PRÓXIMAMENTE...</h2>--}}


    <div class="container-fluid">

        <div class="row">
            <div class="menu3 col-md-2">
                <div class="cat"><h4>CATEGORÍAS</h4></div>
                <ul class="nav menu2">

                    @foreach($categorias as $categoria)
                        <li><a href="{{'subcategorias/'.$categoria->id_categoria}}">{{$categoria->descripcion_categoria}}</a></li>
                    @endforeach

                        <div class="cat"><h4>Twitter</h4></div>
                        <a class="twitter-timeline" href="https://twitter.com/CCLSupermark">Tweets by CCLSupermark</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </ul>
            </div>
            <h2 align="center">PRÓXIMAMENTE...</h2>
            <div class="container col-md-9">
                <div class="" align="center">
                    <div class="col-md-4 caja1 promocion {{----}}">
                        <h3>SUPER PROMOCION</h3>
                        <p>35% EN TODOS LOS PRODUCTOS</p>
                    </div>

                    <div class="col-md-4 caja2 promocion{{--promocion --}}">
                        <h3>COMPRE AHORRANDO</h3>
                        <p>VER CATÁLOGO</p>
                    </div>

                    <div class="col-md-4 caja3 promocion {{--promocion caja3--}}">
                        <h3>OFERTA DEL MES</h3>
                        <p>10% EN TODOS LOS PRODUCTOS</p>
                    </div>
                </div>
            </div>
            <div class="container col-md-9">
                @foreach($categorias as $categoria)
                <div class="col-md-4 bloque">
                    <a href="{{'subcategorias/'.$categoria->id_categoria}}" class="modalLoad">
                        <img src="{{asset('/categorias/'.$categoria->url)}}" alt="Productos" class="articulos img-responsive" >
                        <h3>{{$categoria->descripcion_categoria}}</h3>
                    </a>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Aviso!</h4>
                                </div>
                                <div class="modal-body"  id="bodyes">
                                    <b><em>
                                            “AREA RESTRINGIDA Y EXCLUSIVA PARA CLIENTES REGISTRADOS.<a href="{{URL::to('crear_usuario')}}" style="color:#89c53f">REGISTRATE AQUI</a>  Y CONOZCA  NUESTROS PRODUCTOS O <a href="{{URL::to('login')}}" style="color:#89c53f">INGRESE AQUÍ</a> Y DISFRUTEI SI YA ERES USUARIO REGISTRADO”.
                                            En esa ventanita también habrá que considerar un CHECK-BOX al lado de un link que le direccionará al usuario a los Términos y Condiciones de Registro y Uso DE LA PAGINA.
                                        </em></b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
        @if(Auth::guest())
        $('.modalLoad').click(function() {
            $('#myModal').modal('show') // evento que lanza la ventana
            $('#modalContent').val('');
            $('#bodyes').load();
            return false;
            })
        });
        @endif
    </script>
@endsection
