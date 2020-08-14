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
            <div class="panel-heading">Cargar Factura</div>
            <div class="panel-body">
                {!! Form::open(['url'=>'fiscal/'.$id,'files'=>'true']) !!}
                <div class="col-md-6">
                    {!! Form::label('factura','Factura:') !!}
                    {!! Form::file('factura') !!}
                </div>

                <div class="col-md-6 col-md-offset-4">
                    {!! Form::submit('Enviar',['class'=>'btn btn-default']) !!}
                    {!! link_to('usuario','Volver atras',['class'=>'btn btn-default']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection