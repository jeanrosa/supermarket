@extends('perfil.perfil')
@section('perfil')


<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">Facturas</div>
        <div class="panel-body">
            <table class="table table-responsive table-hover table-bordered">
                <tr>
                    <th>N° Factura</th>
                    <th>Fecha</th>
                    <th>Factura Fiscal</th>
                    <th>PDF Factura</th>
                </tr>
                @foreach($facturas as $fact)
                    <tr>
                        <td>{{$fact->numero_factura}}</td>
                        <td>{{$fact->fecha}}</td>
                        <td>{!! Html::link('factura_fiscal/') !!}</td>
                        {{--<td>{{$cart->cantidad}}</td>
                        <td>
                            {!! Form::open(['url'=>'eliminar/carrito/'.$cart->id_carrito,'method'=>'delete']) !!}
                            <button class="glyphicon glyphicon-remove btn btn-danger btn-xs"></button>
                            {!! Form::close() !!}
                        </td>--}}
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection