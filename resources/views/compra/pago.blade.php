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
            <div class="panel-heading">Confirmación de Pago</div>
            <div class="panel-body">

                {!! Form::open(['url'=>'pagar/'.$id]) !!}

                {!! Form::hidden('compra',$id) !!}

                <div class="col-md-6">
                    {!! Form::label('transferencia','Nro de Transferencia:') !!}
                    {!! Form::text('transferencia','',['class'=>'form-control','placeholder'=>'Tarjeta Todo Ticket']) !!}
                </div>


                <div class='col-sm-6' style="margin-top: 25px">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker5'>
                            {{--{!!Form::label('desde','Fecha De Inicio:')!!}--}}
                            <input type='text' name="fecha_pago" class="form-control"  placeholder="Fecha de Pago"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    {!! Form::label('tipo_pago','Tipo de Pago:') !!}
                    {!! Form::select('tipo_pago',$tipo_pago,'',['class'=>'form-control','placeholder'=>'Debe seleccionar un Tipo de Pago']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('banco','Banco:') !!}
                    {!! Form::select('banco',['BNC'=>'BNC','Mercantil'=>'Mercantil','Banco del Tesoro'=>'Banco del Tesoro'],'',['class'=>'form-control','placeholder'=>'Debe seleccionar un Banco']) !!}
                </div>

                <div class="col-md-6 col-lg-offset-5" style="margin-top: 10px">
                    {!! Form::submit('Enviar Pago',['class'=>'btn btn-success']) !!}
                    {!! link_to('/home','Volver atras',['class'=>'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>


        <div class="col-md-12 col-md-offset-1">
            <div class="col-md-4">
                <a href="http://www.bt.gob.ve/" target="_blank">
                    <img src="{{asset('bancos/b_tesoro.png')}}" class="img-responsive" width="150px" height="150px">
                </a>
                <p>Banco del Tesoro</p>
                <p>Titular: CCL LOGISTICA C.A.</p>
                <p>Tipo de Cuenta: CORRIENTE 01630608806083007790</p>
                <p>RIF J-403.96.261-8</p>
            </div>

            <div class="col-md-4">
                <a href="http://www.mercantilbanco.com/mercprod/index.html" target="_blank">
                    <img src="{{asset('bancos/b_mercantil.png')}}" class="img-responsive" width="150px" height="150px">
                </a>
                <p>Banco Mercantil</p>
                <p>Titular: CCL LOGISTICA C.A.</p>
                <p>Tipo de Cuenta: CORRIENTE 01050031181031704183</p>
                <p>RIF J-403.96.261-8</p>
            </div>

            <div class="col-md-4">
                <a href="http://www.bnc.com.ve/bnc-2/" target="_blank">
                    <img src="{{asset('bancos/b_bnc.png')}}" class="img-responsive" width="150px" height="150px">
                </a>
                <p>Banco Nacional de Credito</p>
                <p>Titular: CCL LOGISTICA C.A.</p>
                <p>Tipo de Cuenta: CORRIENTE 01910052972152053479</p>
                <p>RIF J-403.96.261-8</p>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    useCurrent:false,
                    format:'DD-MM-YYYY',
                    locale:'es'
                });
            });
        });
    </script>
@endsection
