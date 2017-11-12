@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Loguearse para continuar</strong>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="row">
                                    <div class="center-block text-center">
                                        <img class="profile-img-auth"
                                             src="{{ asset('img\logo_150x150.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
                                                <input class="form-control" placeholder="Usuario" name="username" type="text" required >
                                                    @if ($errors->has('username'))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordárme
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Loguearse">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Olvidó su contraseña?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer ">
                        ¿No tiene una cuenta...? <a href="{{ route('register') }}" onClick=""> Registrarse </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
