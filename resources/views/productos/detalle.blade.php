@extends('layouts.app')
@section('content')

    @if($errors->has())
        <div class='alert alert-danger'>
            @foreach ($errors->all('<p>:message</p>') as $message)
                {!! $message !!}
            @endforeach
        </div>
    @endif


    <div id="info"></div>
    <h4>Detalles del Producto</h4>
    <hr>
    <div class="col-sm-5 col-md-5 col-lg-5">
        <div id="wrapper">
            <ul class="rslides" id="slider3">
                @foreach($productos as $produc)

                <li><img src="{{asset('productos_imagenes/'.$produc->url)}}" alt=""></li>
                {{--<li><img src="{{asset('2.jpg')}}" alt=""></li>
                <li><img src="{{asset('3.jpg')}}" alt=""></li>--}}
                @endforeach
            </ul>
        </div>

    </div>
    <div class="col-md-2">
        @foreach($productos as $produc)
            <h4><p>{{$produc->producto}}</p></h4>
            <h4><p>{{$produc->precio}}</p></h4>
            <p>{{$produc->descripcion_producto}}</p>
        @endforeach

    </div>

    @if(Auth::user())
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">Opciones</div>
                <div class="panel-body">
                    <div class="row">
                        {!! Form::open(['url'=>'añadir_carrito','id'=>'form']) !!}
                        <div class="col-md-6">

                            {!! Form::hidden('id',$id) !!}

                            <label for="cantidad">Cantidad</label>
                            <input name="cantidad" type="text" value="" class="form-control" id="cantidad">


                            <input class="btn btn-success hola" type="submit" value="Añadir al Carrito">
                        </div>
                        {!! Form::close() !!}
                    </div>
            <div class="col-md-12">
                    <div class="fb-share-button" data-href="http://www.supermarkonline.com" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.supermarkonline.com%2F&amp;src=sdkpreparse">Compartir</a></div>

                    <a class="twitter-share-button"
                       href="https://twitter.com/intent/tweet?text=Supermark%20Es%20Lo%20Mejor%20te%20Invito%20a%20Visitarlo%20en%20"
                       data-size="small" target="_blank">
                        Tweetear
                    </a>
            </div>
                </div>
                </div>

                </div>
        @endif



    <link type="text/css" href="{{asset('styles/bottom.css')}}" rel="stylesheet" />
    <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript" src="{{asset('lib/jquery.jcarousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/jquery.pikachoose.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/jquery.touchwipe.min.js')}}"></script>
    <link type="text/css"  href="{{asset('bootstrap-touchspin/dist/jquert.bootstrap-touchspin.min.css')}}"/>
    <script type="text/javascript" src="{{asset('bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script language="javascript">
        $(function (){
            $("#slider3").responsiveSlides({
                manualControls: '#slider3-pager',
                maxwidth: 540
            });
        });
    </script>
    <link rel="stylesheet" href="{{asset('ResponsiveSlides/demo/demo.css')}}">


    <link rel="stylesheet" href="{{asset('ResponsiveSlides/responsiveslides.css')}}">
    <link rel="stylesheet" href="{{asset('demo.css')}}">

    <script src="{{asset('ResponsiveSlides/responsiveslides.min.js')}}"></script>



    <script>
        $("input[name='cantidad']").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'glyphicon glyphicon-plus',
            verticaldownclass: 'glyphicon glyphicon-minus'
        });

        $('#form').submit(function() {
            var Cantidad=$('#cantidad').val();

            if(Cantidad == null && Cantidad == '' && Cantidad < 0 && isNaN(Cantidad)){
                $('#info').html("<div class='alert alert-danger'>La cantidad esta vacia.</div>");
                return false;
            }
        });



    </script>

    {{--//facebook--}}
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />





@endsection