@extends('layouts.app')
@section('content')


    <div class="col-md-9">
        <div class="panel panel-success">
            <div class="panel-heading">Editar Comentario</div>
            <div class="panel-body">
                {!! Form::open(['url'=>'comentario/'.$comentario->id_comentario]) !!}

                <div class="col-md-12 ">
                    {!! Form::label('mensaje','Mensaje:') !!}
                    {!! Form::textarea('mensaje',$comentario->comentario,['class'=>'form-control','rows'=>'3']) !!}
                </div>

                <div class="col-md-6 col-lg-offset-4">
                    {!! Form::submit('Enviar',['class'=>'btn btn-default']) !!}
                    {!! link_to('usuario','Volver atras',['class'=>'btn btn-default']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection