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
            <div class="panel-heading">Registro de Proveedor</div>
            <div class="panel-body">
                {!! Form::open(['action'=>'ProveedorController@store']) !!}
                <div class="col-md-6">
                    {!! Form::label('nombre','Nombre:') !!}
                    {!! Form::text('nombre','',['class'=>'form-control','placeholder'=>'Nombre Empresa']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::email('email','',['class'=>'form-control','placeholder'=>'Correo Electronico']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('tlf_local','Telefono Local:') !!}
                    {!! Form::text('tlf_local','',['class'=>'form-control','placeholder'=>'Telefono Local']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('tlf_movil','Telefono Movil:') !!}
                    {!! Form::text('tlf_movil','',['class'=>'form-control','placeholder'=>'Telefono Movil']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('rif','RIF:') !!}
                    {!! Form::text('rif','',['class'=>'form-control','placeholder'=>'Rif']) !!}
                </div>


                <div class="col-md-6">
                    {!! Form::label('pagina_web','Página Web:') !!}
                    {!! Form::text('pagina_web','',['class'=>'form-control','placeholder'=>'URL Web']) !!}
                </div>


                <div class="col-md-6">
                    {!! Form::label('facebook','Facebook:') !!}
                    {!! Form::text('facebook','',['class'=>'form-control','placeholder'=>'URL Facebook']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('twitter','Twitter:') !!}
                    {!! Form::text('twitter','',['class'=>'form-control','placeholder'=>'URL Twitter']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('instagram','Instagram:') !!}
                    {!! Form::text('instagram','',['class'=>'form-control','placeholder'=>'URL Instagram']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('reseña','Reseña Empresa:') !!}
                    {!! Form::textarea('reseña','',['class'=>'form-control','placeholder'=>'Campo de acción']) !!}
                </div>



                <div class="col-md-6">
                    {!! Form::label('dedicacion','Objeto a que se dedidca:') !!}
                    {!! Form::textarea('dedicacion','',['class'=>'form-control','placeholder'=>'Campo de acción']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('estado','Estado:') !!}
                    {!! Form::select('estado',$estado,'',['class'=>'form-control','placeholder'=>'Seleccione el estado','id'=>'estados']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::label('municipio','Municipio:')   !!}
                    <select class="form-control" id="municipios" name="municipio" placeholder="debe">
                        <option value="0">Debe Seleccionar un municipio</option>
                    </select>
                </div>

                <div class="col-md-6">
                    {!! Form::label('parroquia','Parroquia:')   !!}
                    <select class="form-control" id="parroquias" name="parroquia" placeholder="debe">
                        <option value="0">Debe Seleccionar un parroquia</option>
                    </select>
                </div>



                <div class="col-md-6">
                    {!! Form::label('direccion','Dirección:') !!}
                    {!! Form::textarea('direccion','',['class'=>'form-control','placeholder'=>'Calle, Avenida, Transversal']) !!}
                </div>



                {{--<div class="col-md-6">
                    {!! Form::label('tipo_usuario','Tipo Usuario:') !!}
                    {!! Form::select('tipo_usuario',$tipo_usuario,'',['class'=>'form-control','placeholder'=>'Seleccione el tipo de usuario']) !!}
                </div>--}}

                <div class="col-md-6">
                    {!! Form::label('contraseña','Contraseña:') !!}
                    {!! Form::password('contraseña',['class'=>'form-control']) !!}
                </div>


                <div class="col-md-6">
                    {!! Form::label('foto','Logo Empresa:') !!}
                    {!! Form::file('foto',['class'=>'file']) !!}
                </div>

                <div class="col-md-6">
                    {!! Form::submit('Enviar',['class'=>'btn btn-default']) !!}
                    {!! link_to('usuario','Volver atras',['class'=>'btn btn-default']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#estados').change(function () {
                $.get("{{ url('estados')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('#municipios').empty();
                            $.each(data, function (key, element) {
                                $('#municipios').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });



            $('#municipios').change(function () {
                $.get("{{ url('municipios')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('#parroquias').empty();
                            $.each(data, function (key, element) {
                                $('#parroquias').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });
        });



    </script>
@endsection