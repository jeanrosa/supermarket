<p>
    <b>El número de la transferencia es:</b> {{$transferencia}}
</p>
<p>
    <b>La Fecha de Realización de la Transferencia es:</b> {{$fecha_pago}}
</p>
<p>
    <b>El Tipo de pago es:</b>
    @if($tipo_pago == 1)
        {{'Debito'}}
    @elseif($tipo_pago == 2)
        {{'Credito'}}
    @elseif($tipo_pago == 3)
        {{'Transferencia'}}
    @endif
</p>
<p>
    <b>El banco desde el cual se realizo la transferencia fue:</b> {{$banco}}
</p>