@extends('layouts.app')
@section('content')

    <div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">Crear Subcategoria</div>
        <div class="panel-body">
            {!! Form::open(['action'=>'SubcategoriasController@store','files'=>'true']) !!}
            <div class="col-md-6">
                {!! Form::label('categoria','Categorias:') !!}
                {!! Form::select('categoria',$categorias,'',['class'=>'form-control','placeholder'=>'Debe seleccionar una Categoria']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('subcategoria','Subcategoria:') !!}
                {!! Form::text('subcategoria','',['class'=>'form-control','placeholder'=>'Subcategoria']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('foto','Foto') !!}
                {!! Form::file('foto',['class'=>'file']) !!}
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