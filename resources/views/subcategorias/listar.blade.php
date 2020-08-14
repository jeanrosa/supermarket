@extends('layouts.app')
@section('content')


    <div class="container">
        @if(Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje')}}</div>
        @endif
    <div class="panel panel-success">
        <div class="panel-heading">Subcategorias</div>
        <div class="panel-body">
            {{--{!!Form::open(['url'=>'usuario','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
            <div class="form-group">
                {!!Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Busqueda por usuario','id'=>'buscar'])!!}
            </div>
            {!!Form::submit('BUSCAR',['class'=>'btn btn-default'])!!}
            {!!Form::close()!!}--}}

            {!! link_to('crear_subcategoria','Crear Subcategoria',['class'=>'btn btn-success']) !!}


            {{--{!! Html::link('pdf','PDF',['class'=>'btn btn-warning']) !!}--}}
            <div class="table-responsive" style="margin-top: 50px">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Subcategoria</th>
                        <th>Foto</th>
                        <th colspan="2">Acciones</th>
                    </tr>

                    @foreach($subcategorias as $subcategoria)
                        <tr>
                            <td>{{$subcategoria->id_subcategoria}}</td>
                            <td>{{$subcategoria->id_categoria}}</td>
                            <td>{{$subcategoria->descripcion_subcategoria}}</td>
                            <td><img src="{{asset('/subcategorias/'.$subcategoria->url)}}"></td>

                            <td>
                                {!! Html::link('subcategoria/editar/'.$subcategoria->id_subcategoria,'Editar',['class'=>'glyphicon glyphicon-pencil btn btn-warning']) !!}
                            </td>
                            <td>
                                {!! Form::open(['url'=>'subcategoria/eliminar/'.$subcategoria->id_subcategoria,'method'=>'delete']) !!}
                                <button class="glyphicon glyphicon-trash btn btn-danger">Eliminar</button>
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach
                    {!! $subcategorias->render() !!}
                </table>
            </div>
        </div>
    </div>
    </div>


@endsection