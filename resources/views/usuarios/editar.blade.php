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
        {!! Form::open(['url'=>'usuarios/'.$usuarios->id]) !!}
        <div class="col-md-6">
            {!! Form::label('nombre','Nombre:') !!}
            {!! Form::text('nombre',$usuarios->name,['class'=>'form-control']) !!}
        </div>

        <div class="col-md-6">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',$usuarios->email,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('tipo_usuario','Tipo Usuario:') !!}
            {!! Form::select('tipo_usuario',$tipo_usuario,$usuarios->id_tipo_usuario,['class'=>'form-control','placeholder'=>'Seleccione el tipo de usuario']) !!}

        </div>

        <div class="col-md-6">
            {!! Form::label('contraseña','Contraseña:') !!}
            {!! Form::password('contraseña',['class'=>'form-control']) !!}

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