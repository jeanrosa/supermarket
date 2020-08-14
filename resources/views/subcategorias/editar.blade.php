@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">Editar Subcategoria</div>
        <div class="panel-body">
            {!! Form::open(['url'=>'subcategoria/actualizar/'.$subcategoria->id_subcategoria,'files'=>true]) !!}
            <div class="col-md-6">
                {!! Form::label('categoria','Categorias:') !!}
                {!! Form::select('categoria',$categorias,$subcategoria->id_categoria,['class'=>'form-control','placeholder'=>'Debe seleccionar una Categoria']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('subcategoria','Subcategoria:') !!}
                {!! Form::text('subcategoria',$subcategoria->descripcion_subcategoria,['class'=>'form-control','placeholder'=>'Subcategoria']) !!}
            </div>
            <div>
                {!! Form::label('foto','Foto') !!}
                {!! Form::file('foto',['class'=>'form-control']) !!}
            </div>


            <div class="col-md-6 col-lg-offset-5" style="margin-top: 10px">
                {!! Form::submit('Enviar',['class'=>'btn btn-success']) !!}
                {!! link_to('subcategoria','Volver atras',['class'=>'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection