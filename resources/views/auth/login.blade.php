<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SuperMarket- @yield('titulo')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('fonts-awesome/font-awesome.min.css')}}" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('fonts-awesome/fonts-googleapis.css')}}">
    {{--<link rel="stylesheet" href="{{asset('css/menu.css')}}">--}}
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <script src="https://use.fontawesome.com/feffe431be.js"></script>
    <link rel="shortcut icon" href="{{asset('imagenes/favicon.png')}}">
    <script src="{{asset('jquery/jquery.js')}}"></script>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/fondo.css')}}">
</head>
<body id="app-layout">
<div class="container-fluid">
    <div class="jumbotron boxlogin">

    <img class="logo" src="{{asset('imagenes/Logo-web.png')}}">
    <h2 class="sesion"></h2>


        <!-- Page Content -->
        {{--<div class="container">--}}

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Correo Electronico</label>

                <div class="col-md-12">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Contraseña</label>

                <div class="col-md-12">
                    <input type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Recordarme
                        </label>
                    </div>
                </div>
            </div>
            {{--<div class="form-group">
                 <div class="col-md-6 col-lg-offset-4">
                   {!! app('captcha')->display() !!}

                      @if ($errors->has('g-recaptcha-response'))
                           <span class="help-block">
                              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                      @endif
                   </div>
                 </div>--}}



            <div class="form-group">
                <div class="col-md-12">
				
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-btn fa-sign-in"></i>Entrar
                    </button>
					<a href="{{URL::to('/home')}}" class="btn btn-danger" ><i class="fa fa-sign-out"></i>Regresar</a>
				
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu Contraseña?</a>
                </div>
            </div>
        </form>
    </div>
</div>

<img alt="SuperMarkOnline" src="{{asset('imagenes/imglogin.png')}}" id="full-screen-background-image"  class="img-responsive"/>