@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="panel panel-success" style="margin-top:20px">
        <div class="panel-heading">Compras del Usuario</div>
        <div class="panel-body">
            <table class="table table-responsive table-hover table-bordered">
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Eliminar</th>
                </tr>
                @foreach($compras as $comp)
                    <tr>
                        <td>{{$comp->id_carrito}}</td>
                        <td>{{$comp->fecha}}</td>
                        <td>{{$comp->id_status}}</td>
                        <td>{{$comp->total}}</td>
                        <td>{{$comp->id_tipo_pago}}</td>
                        <td>{!! Html::link('factura/'.$comp->id_compra,'Factura Fiscal',['class'=>'fa fa-print btn btn-primary']) !!}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection