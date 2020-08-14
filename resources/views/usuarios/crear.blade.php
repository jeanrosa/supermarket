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
    <div id="info"></div>
<div class="panel panel-success">
    <div class="panel-heading">Registro de Usuario</div>
        <div class="panel-body">
        {!! Form::open(['action'=>'UsuariosController@guardar','id'=>'form']) !!}

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('nombre','Nombre:') !!}
                {!! Form::text('nombre','',['class'=>'form-control','placeholder'=>'Nombre y Apellido']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email','',['class'=>'form-control','placeholder'=>'Correo Electronico']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('cedula','Cedula:') !!}
                {!! Form::text('cedula','',['class'=>'form-control','placeholder'=>'Cedula ó Pasaporte']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('pais','Pais:') !!}
                {!! Form::select('pais',$paises,'',['class'=>'form-control','placeholder'=>'Seleccione su Pais','id'=>'pais']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('estado','Estado:') !!}
                {!! Form::select('estado',$estado,'',['class'=>'form-control','placeholder'=>'Seleccione el estado','id'=>'estados']) !!}
            </div>

			<div class="col-md-6" id="ciudadd">
                <span style="color:red;">*</span>
                {!! Form::label('ciudad','Ciudad:') !!}
                {!! Form::text('ciudad','',['class'=>'form-control','placeholder'=>'Ciudad ò localidad','id'=>'ciudad']) !!}
            </div>

            <div class="col-md-6" id="municipiosd">
                <span style="color:red;">*</span>
                {!! Form::label('municipio','Municipio:')   !!}
                <select class="form-control" id="municipios" name="municipio" placeholder="debe">
                    <option value="0">Debe Seleccionar un municipio</option>
                </select>
            </div>

            <div class="col-md-6" id="parroquiasd">
                <span style="color:red;">*</span>
                {!! Form::label('parroquia','Parroquia:')   !!}
                <select class="form-control" id="parroquias" name="parroquia" placeholder="debe">
                    <option value="0">Debe Seleccionar un parroquia</option>
                </select>
            </div>


            <div class="col-md-12">
                <span style="color:red;">*</span>
                {!! Form::label('direccion','Dirección:') !!}
                {!! Form::textarea('direccion','',['class'=>'form-control','placeholder'=>'Calle, Avenida o Transversal y Edificio o Nombre casa','rowspan'=>'2','rows'=>'2']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('tlf_local','Telefono Local:') !!}
                {!! Form::text('tlf_local','',['class'=>'form-control','placeholder'=>'Telefono Local']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('tlf_movil','Telefono Movil:') !!}
                {!! Form::text('tlf_movil','',['class'=>'form-control','placeholder'=>'Telefono Movil']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('facebook','Facebook:') !!}
                <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                    <a data-toggle="tooltip" data-placement="right" target="_blank" title="Si no tiene Facebook Haga Click aca." href="https://facebook.com" class="fa fa-facebook">
                    </a>
                </span>
                {!! Form::text('facebook','',['class'=>'form-control','placeholder'=>'URL Facebook','aria-describedby'=>'basic_addon1']) !!}
            </div>
            </div>

            <div class="col-md-6">
                {!! Form::label('twitter','Twitter:') !!}
                {!! Form::text('twitter','',['class'=>'form-control','placeholder'=>'URL Twitter']) !!}
            </div>

            <div class="col-md-6">
                {!! Form::label('instagram','Instagram:') !!}
                {!! Form::text('instagram','',['class'=>'form-control','placeholder'=>'URL Instagram']) !!}
            </div>

            <div class='col-sm-6' style="margin-top: 25px">
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker5'>
                        {{--{!!Form::label('desde','Fecha De Inicio:')!!}--}}
                        <input type='text' name="f_nacimiento" class="form-control"  placeholder="dd-mm-aaaa"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('sexo','Sexo:') !!}
                {!! Form::select('sexo',$sexos,'',['class'=>'form-control','placeholder'=>'Seleccione su sexo','id'=>'sexo']) !!}
            </div>

            <div class="col-md-6">
                <span style="color:red;">*</span>
                {!! Form::label('contraseña','Contraseña:') !!}
                {!! Form::password('contraseña',['class'=>'form-control']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::label('recontraseña','Re-escriba Contraseña:') !!}
                {!! Form::password('recontraseña',['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                <div class="col-md-6 col-lg-offset-4" style="margin-top: 20px">
                 {!! app('captcha')->display() !!}
                 @if ($errors->has('g-recaptcha-response'))
                   <span class="help-block">
                     <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                   </span>
                 @endif
                </div>
            </div>

            <div class="col-md-5 col-md-offset-4" style="margin-top: 10px">
                <div class="checkbox">
                    <label>
                    {!! Form::checkbox('terminos') !!}
                    <p><b>Acepto los <a href="{{URL::to('terminos')}}" class="modalLoad">terminos y Condiciones</a></b></p>
                    </label>
                </div>
            </div>
			
			   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Aviso!</h4>
                            </div>
                            <div class="modal-body"  id="bodyes">
                                <b>
								<em>
								<div class="col-md-12 col-md-offset-2">
								<img src="{{asset('imagenes/Logo-web.png')}}" alt="SupermarkOnline" width="350px" height="150px">
								</div>
                                        <p class="text-justify">Estos son los Tèrminos y Condiciones</p>
										<p class="text-justify">1-No se permite la reventa de nuestros productos, ya que se venden para uso personal del cliente.</p>
                                    </em>
								</b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-md-offset-5" style="margin-top: 10px">
                {!! Form::submit('Enviar',['class'=>'btn btn-success']) !!}
                {!! link_to('/home','Volver atras',['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}
    </div>
    </div>
</div>

    <script type="text/javascript">
        $(document).ready(function () {
		$('#municipiosd').hide();
		$('#parroquiasd').hide();
		$('#ciudadd').hide();

            $(function () {
                $('#datetimepicker5').datetimepicker({
                    useCurrent:false,
                    format:'DD-MM-YYYY',
                    locale:'es'
                });
            });


            $('#estados').change(function () {
                $.get("{{ url('estados')}}",
                        {option: $(this).val()},
                        function (data) {
                            $('#municipios').empty();
                            $('#municipios').prepend("<option value='0'>Debe Seleccionar un municipio</option>");
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
                            $('#parroquias').prepend("<option value='0'>Debe Seleccionar un municipio</option>");
                            $.each(data, function (key, element) {
                                $('#parroquias').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });

			$('#pais').change(function(){
				var pais=$('#pais').val();
				if (pais == '232' ){
					$('#municipiosd').show();
					$('#parroquiasd').show();
					$('#ciudadd').hide();
				}else if(pais != '232'){
					$('#ciudadd').show();
					$('#municipiosd').hide();
					$('#parroquiasd').hide();

				}

			});
			
				$('.modalLoad').click(function() {
				$('#myModal').modal('show') // evento que lanza la ventana
				$('#modalContent').val('');
				$('#bodyes').load();
				return false;
				})
			});
        

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })


        $('#form').submit(function() {
            var Contraseña=$('#contraseña').val();
            var Recontraseña=$('#recontraseña').val();


            if(Contraseña != Recontraseña){
                $('#info').html("<div class='alert alert-danger'>Las contraseñas no coinciden</div>");
                return false;
            }
        });
		
		


    </script>
@endsection