@extends('layouts.app')

@section('content')

    <div class="col-md-9">
        <h4>Productos Por Categoria</h4>
        <hr>

        <div class="row">

            @foreach($subcategorias as $sub)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{$sub->url}}" alt="" width="320" class="img-responsive" height="150">
                        <div class="caption">
                            {{--<h4 class="pull-right">$24.99</h4>--}}
                            <h4>
                                {!! Html::link('subcategorias/'.$sub->id_subcategoria,$sub->descripcion_subcategoria) !!}
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
    {{--<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    Estas Dentro del Sistema!
                </div>
            </div>
        </div>
    </div>--}}

@endsection
