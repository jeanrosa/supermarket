@extends('layouts.app')
@section('content')

    <div class="col-md-9">
        @if($errors->has())
            <div class='alert alert-danger'>
                @foreach ($errors->all('<p>:message</p>') as $message)
                    {!! $message !!}
                @endforeach
            </div>
        @endif
        <div class="panel panel-success">
            <div class="panel-heading">Registro de Tarjeta al usuario {{$usuario->nombre}}</div>
            <div class="panel-body">
                {!! Form::open(['url'=>'usuarios/tarjeta/'.$usuario->id]) !!}
                <div class="col-md-6">
                    {!! Form::label('tarjeta','Tarjeta Cliente:') !!}
                    {!! Form::text('tarjeta','',['class'=>'form-control']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::submit('Enviar',['class'=>'btn btn-default']) !!}
                    {!! link_to('usuario','Volver atras',['class'=>'btn btn-default']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection