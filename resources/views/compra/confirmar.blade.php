@extends('layouts.app')
@section('content') 
<div class="container">
   @if(Session::has('mensaje'))
        <div class="alert alert-success">{{Session::get('mensaje')}}</div>
    @endif

    <div class="panel panel-success" style="margin-top:20px">
        <div class="panel-heading">Compras</div>
        <div class="panel-body">
            <table class="table table-responsive table-hover table-bordered">
                <tr>
                    <th class="text-center">Total</th>
                    <th class="text-center">Carrito</th>
                    <th class="text-center">Estatus</th>
                    <th colspan="3" class="text-center">Acciones</th>
                </tr>
                @foreach($compras as $comp)
                    <tr class="text-center">
                        <td>{{$comp->total}}</td>
                        <td>{{$comp->id_carrito}}</td>
                        <td>{{$comp->id_status}}</td>
                        <td>
                            {!! Form::open(['url'=>'eliminar/compra/'.$comp->id_compra,'method'=>'delete']) !!}
                            <button class="btn btn-danger">Eliminar</button>
                            {!! Form::close() !!}
                        </td>
                        <td>
                            {!! Html::link('confirmar/'.$comp->id_compra,'Confirmar Su Compra',['class'=>'btn btn-info']) !!}
                        </td>
                        <td>
                            {!! Html::link('presupuesto/'.Auth::user()->id,'Presupuesto',['class'=>'btn btn-primary']) !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
		</div>
</div>
@endsection
