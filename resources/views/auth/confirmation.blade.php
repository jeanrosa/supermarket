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
            <div class="panel-heading">Registro de Usuario</div>
            <div class="panel-body">
                {!! Form::open(['action'=>'UsuariosController@guardar']) !!}


                <div class="col-md-6 col-md-offset-5" style="margin-top: 10px">
                    {!! Form::submit('Enviar',['class'=>'btn btn-success']) !!}
                    {!! link_to('usuario','Volver atras',['class'=>'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection