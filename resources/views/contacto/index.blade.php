@extends('layouts.app')
@section('content')


    <div class="panel panel-success">
        <div class="panel-heading">Modulo de Contacto</div>
        <div class="panel-body">
            {!! Form::open(['action'=>'ContactoController@enviar']) !!}

            @foreach($usuarios as $usuario)
                {!! Form::hidden('email',$usuario->email) !!}
                {!! Form::hidden('nombre',$usuario->nombre) !!}
                {!! Form::hidden('tlf_local',$usuario->telefono_local) !!}
                {!! Form::hidden('tlf_movil',$usuario->telefono_movil) !!}
            @endforeach
            <div class="col-md-6 col-md-offset-3">
                {!! Form::label('mensaje','Mensaje:') !!}
                {!! Form::textarea('mensaje','',['class'=>'form-control','cols'=>'2','rows'=>'3']) !!}
            </div>

            <div class="col-md-6 col-lg-offset-5">
                {!! Form::submit('Enviar',['class'=>'btn btn-default']) !!}
                {!! link_to('usuario','Volver atras',['class'=>'btn btn-default']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection