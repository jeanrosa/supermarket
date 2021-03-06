@extends('layouts.app')
@section('content')

    <div class="container">
        @if($errors->has())
            <div class='alert alert-danger'>
                @foreach ($errors->all('<p>:message</p>') as $message)
                    {!! $message !!}
                @endforeach
            </div>
        @endif
    <div class="panel panel-success">
        <div class="panel-heading">Crear Producto</div>
        <div class="panel-body">
            {!! Form::open(['action'=>'ProductosController@store','files'=>'true']) !!}
            <div class="col-md-6">
                {!! Form::label('subcategoria','Subcategorias:') !!}
                {!! Form::select('subcategoria',$subcategoria,'',['class'=>'form-control','placeholder'=>'Debe seleccionar una Subcategoria']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('producto','Producto:') !!}
                {!! Form::text('producto','',['class'=>'form-control']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('descripcion','Descripcion del Producto:') !!}
                {!! Form::textarea('descripcion','',['class'=>'form-control']) !!}
            </div>


            <div class="col-md-6">
                {!! Form::label('precio','Precio:') !!}
                {!! Form::text('precio','',['class'=>'form-control']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('unidad','Unidad de Medida:') !!}
                {!! Form::select('unidad',$unidad,'',['class'=>'form-control','placeholder'=>'Debe seleccionar una unidad de medida']) !!}
            </div>


            <div class="col-md-6">
                {!! Form::label('fotos[]','Fotos Productos:') !!}
                <input id=fotos" name="fotos[]" type="file" multiple class="file-loading">
            </div>

            <div class="col-md-6 col-lg-offset-5" style="margin-top: 10px">
                {!! Form::submit('Enviar',['class'=>'btn btn-success']) !!}
                {!! link_to('producto','Volver atras',['class'=>'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $("#fotos").fileinput({
                maxFileCount: 10,
                allowedFileExtensions: ["jpg", "gif", "png"]
            });
        });

    </script>
@endsection