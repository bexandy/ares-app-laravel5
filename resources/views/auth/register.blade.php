@extends('layouts.master')

@section('content')


<div class="container">
    <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default" >

            <div class="panel-heading text-center">
                <div class="panel-title"><strong>Panel de registro</strong></div>
            </div>

            <div style="padding-top:30px" class="panel-body" >
                <div class="row">
                    <div class="center-block text-center">
                        <img class="profile-img-auth"
                             src="{{ asset('img\logo_150x150.png') }}" alt="">
                    </div>
                </div>

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="registerform" class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div style="margin-bottom: 25px" class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Tu nombre y Apellido." required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div style="margin-bottom: 25px" class="input-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Tu Usuario" value="{{ old('username') }}" required>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div style="margin-bottom: 25px" class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" type="email" class="form-control" name="email" placeholder="Tu correo electrónico." value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div style="margin-bottom: 25px" class="input-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
                        <input id="imagen" type="text" class="form-control" name="imagen" placeholder="Tu imagen de usuario" value="{{ old('imagen') }}" >
                        @if ($errors->has('imagen'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div style="margin-bottom: 25px" class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Tu contraseña." required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repite tu contraseña">
                    </div>

                    <div style="margin-top:10px" class="form-group text-center">
                        <!-- Button -->
                            <div class="col-sm-12 controls">
                                <button type="submit" class="btn btn-success">
                                   Registrarse
                                </button>
                            </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="{{ route('login') }}">¿Ya tienes cuenta?. ¡Logueate :D!</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
