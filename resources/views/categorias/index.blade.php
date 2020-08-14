@extends('layouts.app')
@section('content')

    <div class="container">
        @if(Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje')}}</div>
        @endif
    <div class="panel panel-success">
        <div class="panel-heading">Categorias</div>
        <div class="panel-body">
            {!!Form::open(['url'=>'categoria','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
            <div class="form-group">
                {!!Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Busqueda por usuario','id'=>'buscar'])!!}
            </div>
            {!!Form::submit('BUSCAR',['class'=>'btn btn-default'])!!}
            {!!Form::close()!!}

            {!! link_to('crear_categoria','Crear Categoria',['class'=>'btn btn-success']) !!}


            {{--{!! Html::link('pdf','PDF',['class'=>'btn btn-warning']) !!}--}}
            <div class="table-responsive" style="margin-top: 50px">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Imagen</th>
                        <th colspan="2">Acciones</th>
                    </tr>

                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->id_categoria}}</td>
                            <td>{{$categoria->descripcion_categoria}}</td>
                            <td><img src="{{asset('/categorias/'.$categoria->url)}}"></td>
                            <td>
                                {!! Html::link('categoria/editar/'.$categoria->id_categoria,'Editar',['class'=>'glyphicon glyphicon-pencil btn btn-warning']) !!}
                            </td>
                            <td>
                                {!! Form::open(['url'=>'categoria/eliminar/'.$categoria->id_categoria,'method'=>'delete']) !!}
                                <button class="glyphicon glyphicon-trash btn btn-danger">Eliminar</button>
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach
                    {!! $categorias->render() !!}
                </table>
            </div>
        </div>
    </div>
    </div>


@endsection