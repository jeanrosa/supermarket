@extends('layouts.app')
@section('content')
        <div class="row" style="margin-top: 20px">
            <div class="col-md-2">
                <nav>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="{{URL::to('')}}">Resumen</a></li>
                        <li><a href="{{URL::to('facturas')}}">Facturas</a></li>
                        <li><a href="{{URL::to('')}}">Historicos</a></li>
                        <li><a href="{{URL::to('confirmar_compra/.Auth::user()->id')}}">Compras</a></li>
                        <li><a href="{{URL::to('carrito')}}">Carrito</a></li>
                    </ul>
                </nav>
            </div>
            @yield('perfil')
        </div>



        <div>
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

            <!-- Your share button code -->
            <div class="fb-share-button" data-href="http://www.supermarkonline.com" data-layout="button_count" data-mobile-iframe="true">
                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.supermarkonline.com%2F&amp;src=sdkpreparse">Compartir</a>
            </div>
        </div>
@endsection