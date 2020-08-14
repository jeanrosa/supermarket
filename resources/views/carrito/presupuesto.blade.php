<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <title></title>
</head>
<body>
<link rel="stylesheet" href="{{asset('css/reportes.css')}}">
<div class="container">
    <div class="main row">
        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9  text-center">

            <h1>Presupuesto</h1>
            <hr/>

            <div class="row">

                <div class="col-md-6">
                    <div>
                        <img src="{{asset('imagenes/Logo-web.png')}}" width="200px" height="100px">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="color1 text-center table-rwd">
                        <p>
                        <h4>Fecha</h4>
							{{\Carbon\Carbon::now()->format('d-m-y')}}
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="color1 text-center table-rwd">
                        <p><h4>Numero</h4>
                        Ve45678
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div>
                        <div class="color1 text-center table-rwd">
                            <strong>Vendedor:</strong> SupermarkOnline.com<br/>
                            <strong>Condiciones de pago:</strong> De contado<br/>
                            <strong>Fecha de Vencimiento:</strong> 15 dias <br/>
                        </div>
                    </div>
                </div>

            </div>
            <hr class="secundario"/>

            <div class="row text-left">

                <h4>Para:</h4>
                <div class="col-md-6">
                    @foreach($usuario as $usua)
                    <div class="color4 table-rwd">
                        <strong>Cedula/Pasaporte/ID</strong> {{$usua->identificacion}} </br>
                        <strong>Nombre:</strong> {{$usua->nombre}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="color4 table-rwd">
                        <strong>Dirección:</strong> {{$usua->direccion}} </br>
                        <strong>Parroquia:</strong>{{$usua->descripcion_parroquia}}  <strong>{{$usua->descripcion_municipio}}</strong> {{$usua->descripcion}}</br>
                        {{--<strong>Ciudad:</strong> Caracas. Distrito Capital - Venezuela--}}
                    </div>
                    @endforeach
                </div>

            </div>
            <hr class="secundario"/>

            <div class="row">
                <div class="col-md-12">
                    <table class="table-rwd" width="100%" border="1">
                        <tr>
                            <th width="10%" scope="col">Cantidad</th>
                            <th width="60%" scope="col">Productos</th>
                            <th width="15%" scope="col">Precio</th>
                            <th width="15%" scope="col">Total</th>

                        </tr>
                        <?php
                        $total=0;
                        ?>
                        @foreach($presupuesto as $pre)
                            <tr>
                                <td>{{$pre->cantidad}}</td>
                                <td>{{$pre->producto}}</td>
                                <td>{{$pre->precio}}</td>
                                <?php

                                $total_producto=$pre->cantidad*$pre->precio;
                                $total+=$total_producto;
                                ?>
                                <td>{{$total_producto}} VEF</td>
                            </tr>
                        @endforeach


                    </table>
                    <br/>
                    <table class="table-rwd" width="40%" border="1" align="right">
                        {{--<tr>
                            <th width="%" scope="row">Sub Total</th>
                            <td width="37.5%">&nbsp;</td>
                        </tr>
                        <tr>
                            <th scope="row">Impuestos sobre Ventas</th>
                            <td>&nbsp;</td>
                        </tr>--}}
                        <tr>
                            <th scope="row">Total</th>
                            <td><b>Total</b>  {{$total}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <hr class="secundario"/>

            <div class="row text-left">
                <h4>De:</h4>
                <div class="col-md-6">
                    <div class="color4 table-rwd">
                        <strong>Rif:</strong>  J-403.96.261-8 </br>
                        <strong>Nombre:</strong> Supermarkonline.com
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="color4 table-rwd">
                        <strong>Dirección:</strong> Sur 31, etc</br>
                        <strong>Parroquia:</strong> Catedral, <strong>Municipio</strong> Libertador</br>
                        <strong>Ciudad:</strong> Caracas. Distrito Capital - Venezuela
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</body>
</html>