@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">Editar Categoria</div>
        <div class="panel-body">
            {!! Form::open(['url'=>'categoria/'.$categorias->id_categoria,'files'=>true]) !!}
            <div class="col-md-6">
                {!! Form::label('descripcion','Categorias:') !!}
                {!! Form::text('descripcion',$categorias->descripcion_categoria,['class'=>'form-control']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('foto','Foto Categoria:') !!}
                {!! Form::file('foto',['class'=>'form-control']) !!}
            </div>

            <div class="col-md-6 col-lg-offset-5" style="margin-top: 10px">
                {!! Form::submit('Enviar',['class'=>'btn btn-success']) !!}
                {!! link_to('categoria','Volver atras',['class'=>'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>
    </div>


@endsection