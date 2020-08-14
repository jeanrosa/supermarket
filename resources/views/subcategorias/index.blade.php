@extends('layouts.app')

@section('content')

    <div class="col-md-9">
        <h4>Productos Sub-Categorias</h4>
        <hr>
        <div class="row">

            @foreach($subcategorias as $subc)
                {{--{{$subc->subcategorias}}--}}
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="{{asset('/subcategorias/'.$subc->url)}}" alt="" width="320" class="img-responsive" height="150">
                        <div class="caption">
                            {{--<h4 class="pull-right">$24.99</h4>--}}
                            <h4>
                                {!! Html::link('productos/'.$subc->id_subcategoria,$subc->descripcion_subcategoria) !!}
                            </h4>
                            {{--<p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>--}}
                        </div>
                        {{--<div class="ratings">
                            <p class="pull-right">15 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>--}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
