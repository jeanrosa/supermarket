@extends('layouts.app')
@section('content')

    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <div class="panel panel-success">
            <div class="panel-heading">Productos</div>
            <div class="panel-body">
                {!!Form::open(['url'=>'producto','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
                <div class="form-group">
                    {!!Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Busqueda','id'=>'buscar'])!!}
                </div>
                {!!Form::submit('BUSCAR',['class'=>'btn btn-default'])!!}
                {!!Form::close()!!}

                {!! link_to('crear_producto','Crear Producto',['class'=>'btn btn-success']) !!}


                {{--{!! Html::link('pdf','PDF',['class'=>'btn btn-warning']) !!}--}}
                <div class="table-responsive" style="margin-top: 50px">
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Subcategorias</th>
                            <th>Producto</th>
                            {{--<td>Imagen</td>--}}
                            <th colspan="2">Acciones</th>
                        </tr>

                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->id_producto}}</td>
                                <td>{{$producto->id_subcategoria}}</td>
                                <td>{{$producto->descripcion_producto}}</td>
                                {{--<td>{{$producto->descripcion_producto}}</td>--}}
                                {{--<td><img src="{{$categoria->url}}"></td>--}}
                                <td>
                                    {!! Html::link('producto/editar/'.$producto->id_producto,'Editar',['class'=>'glyphicon glyphicon-pencil btn btn-warning']) !!}
                                </td>
                                <td>
                                    {!! Form::open(['url'=>'producto/eliminar/'.$producto->id_producto,'method'=>'delete']) !!}
                                    <button class="glyphicon glyphicon-trash btn btn-danger">Eliminar</button>
                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        {!! $productos->render() !!}
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection