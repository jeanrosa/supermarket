@extends('layouts.app')
@section('content')

    <div class="col-md-9">
        @if(Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje')}}</div>
        @endif

        @if($errors->has())
            <div class='alert alert-danger'>
               @foreach ($errors->all('<p>:message</p>') as $message)
                   {!! $message !!}
               @endforeach
            </div>
        @endif
        <div class="panel panel-success">
            <div class="panel-heading">Comentarios</div>
            <div class="panel-body">
                {!! Form::open(['action'=>'ComentariosController@store']) !!}


                <div class="col-md-6">
                    {!! Form::label('mensaje','Mensaje:') !!}
                    {{--{!! Form::textarea('mensaje','',['class'=>'form-control','placeholder'=>'Mensaje']) !!}--}}
                    <textarea name="mensaje" class="form-control" placeholder="Escriba su Mensaje" style="width: 873px; height: 98px;" rows="10" cols="50"></textarea>
                </div>

                <div class="col-md-6 col-md-offset-4" style="margin-top: 20px">
                    {!! Form::submit('Enviar Comentario',['class'=>'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}

                {{--<div class="table-responsive">--}}
                <table class="table table-responsive" style="margin-top: 250px">
                    <tr>
                        <th>Nombre</th>
                        <th>Mensaje</th>
                        <th colspan="2">{{--Acción--}}</th>
                    </tr>
                    @foreach($comentarios as $comentario)
                        <tr>
                            <td>
                                {{$comentario->usuarios->name}}<br>
                                {{$comentario->fecha}}
                            </td>
                            <td>{{$comentario->comentario}}</td>
                            @if(Auth::user() && Auth::user()->id_usuario === $comentario->usuarios->id_usuario)
                            <td>{!! Html::link('comentario/editar/'.$comentario->id_comentario,'',['class'=>'glyphicon glyphicon-pencil','id'=>'editar']) !!}</td>
                            <td>
                                {!! Form::open(['url'=>'eliminar/comentario/'.$comentario->id_comentario,'method'=>'delete']) !!}
                                <button class="glyphicon glyphicon-remove btn btn-danger btn-xs"></button>
                                {!! Form::close() !!}
                            </td>

                            @endif
                        </tr>
                    @endforeach


                </table>
                {{--</div>--}}








            </div>
        </div>
    </div>


    <script type="text/javascript">
        /*function eliminar(id, este) {
            $.ajax({
                type: "POST",
                url: '{{url("eliminar/comentario/$comentario->id_comentario")}}',
                data: {id_comentario: id, operacion: "delete"}
            }).done(function (msg) {

                alert(msg);
                $(este).parent().parent().remove();
            }).fail(function () {
                alert("Error enviando los datos. Intente nuevamente");
            });
        }
        $(document).ready(function () {*/

           /* $('.eliminar').click(function() {


                $.ajax({
                    type: "POST",
                    url: '{{url("eliminar/comentario/$comentario->id_comentario")}}',
                    data: "{{$comentario->id_comentario}}",
                }).done(function (msg) {
                    $('.eliminar').parent().parent().remove();
                }).fail(function () {
                    alert("Error enviando los datos. Intente nuevamente");
                });
            });*/






            /*function editar(id) {
                $.ajax({
                    type: "POST",
                    url: "usuarios.php",
                    data: {operacion: 'update', id_usuario: id}
                }).done(function (html) {
                    $('#contenido').html(html);
                }).false(function () {
                    alert('Error al cargar modulo');
                });
            }*/




        /*});*/



    </script>
@endsection
