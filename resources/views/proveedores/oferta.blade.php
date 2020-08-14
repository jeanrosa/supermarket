@extends('layouts.app')
@section('content')


        <div class="panel panel-success">
            <div class="panel-heading">Registro de Ofertas</div>
            <div class="panel-body">
                {!! Form::open(['action'=>'ProveedorController@setOffer']) !!}


                <div class="table-responsive">
                    <table class="table-responsive table-bordered table-hover input_fields_wrap">
                        <tr>
                           <th>Producto</th>
                           <th>Unidad de Medida</th>
                           <th>Cantidad</th>
                           <th>Precio</th>
                        </tr>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td>
                             <button class="add_field_button btn btn-success" >+</button>
                           </td>
                        </tr>
                    </table>
                </div>


            </div>
        </div>

    {{--<div class="col-md-9">
        <div class="panel panel-success">
            <div class="panel-heading">Registro de Ofertas</div>
            <div class="panel-body">
                {!! Form::open(['action'=>'ProveedorController@offer']) !!}

                <div class="col-md-6">
                    {!! Form::label('categoria','Categoria:') !!}
                    {!! Form::select('categoria',$categoria,'',['class'=>'form-control','placeholder'=>'Debe Seleccionar una categoria','id'=>'estados']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('subcategoria','Subcategoria:')   !!}
                    <select class="form-control" id="subcategoria" name="subcategoria">
                        <option value="0">Debe Seleccionar una Subcategoria</option>
                    </select>
                </div>

                <div class="col-md-6">
                    {!! Form::label('producto','Producto:')   !!}
                    <select class="form-control" id="producto" name="producto">
                        <option value="0">Debe Seleccionar un producto</option>
                    </select>
                </div>

                <div class="col-md-6">
                    {!! Form::label('unidad','Unidad:') !!}
                    {!! Form::select('unidad',$unidad,'',['class'=>'form-control','placeholder'=>'Seleccione el estado','id'=>'estados']) !!}
                </div>


                <div class="col-md-6">
                    {!! Form::label('cantidad','Cantidad:') !!}
                    {!! Form::text('cantidad','',['class'=>'form-control','placeholder'=>'Rif']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('precio','Precio:') !!}
                    {!! Form::text('precio','',['class'=>'form-control','placeholder'=>'Rif']) !!}
                </div>


                <div class="col-md-6">
                    {!! Form::submit('Enviar Oferta',['class'=>'btn btn-default']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>--}}
@endsection