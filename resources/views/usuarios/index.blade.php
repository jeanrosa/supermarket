@extends('layouts.app')
@section('content')

<div class="col-md-9">
    @if(Session::has('mensaje'))
        <div class="alert alert-success">{{Session::get('mensaje')}}</div>
    @endif
    <div class="panel panel-success">
    <div class="panel-heading">Usuarios</div>
    <div class="panel-body">
        {!!Form::open(['url'=>'usuario','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search'])!!}
        <div class="form-group">
            {!!Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Busqueda por usuario','id'=>'buscar'])!!}
        </div>
        {!!Form::submit('BUSCAR',['class'=>'btn btn-default'])!!}
        {!!Form::close()!!}

    {!! link_to('crear_usuario','Crear Usuario',['class'=>'btn btn-success']) !!}


        {{--{!! Html::link('pdf','PDF',['class'=>'btn btn-warning']) !!}--}}
    <div class="table-responsive" style="margin-top: 50px">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                {{--<td>Contraseña</td>--}}
                <th>Telefono Local</th>
                <th>Telefono Movil</th>
                <th>Foto</th>
                <th colspan="4">Acciones</th>
            </tr>

            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->telefono_local}}</td>
                <td>{{$usuario->telefono_movil}}</td>
                <td><img src="foto_usuario/{{$usuario->foto}}" width="80px" height="80px" alt="Foto Usuario"></td>
                {{--<td>{{$usuario->password}}</td>--}}
                {{--<td>{{$usuario->tipo_usuario}}</td>--}}
                <td>
                    {!! Html::link('usuarios/editar/'.$usuario->id,'Editar',['class'=>'glyphicon glyphicon-pencil btn btn-warning']) !!}
                </td>
                <td>
                    {!! Html::link('tarjeta/'.$usuario->id,'CCL Card',['class'=>'fa fa-credit-card btn btn-info']) !!}
                </td>
                <td>
                    {!! Html::link('foto/'.$usuario->id,'Foto',['class'=>'fa fa-camera btn btn-primary']) !!}
                </td>
                <td>
                    {!! Html::link('compras/'.$usuario->id,'Compras',['class'=>'fa fa-opencart btn btn-primary']) !!}
                </td>
                <td>
                    {!! Form::open(['url'=>'usuarios/eliminar/'.$usuario->id,'method'=>'delete']) !!}
                        <button class="glyphicon glyphicon-trash btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}

                </td>
            </tr>
            @endforeach
            {!! $usuarios->render() !!}
        </table>
    </div>
    </div>
    </div>
</div>

@endsection