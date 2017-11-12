@extends('adminlte::page')

@section('title', 'Crear Categoría')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')

    <div class="row" style="margin-top:20px">

        <div class="col-md-offset-3 col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">
                        <i class="icon-favoritefolder"></i>
                        Añadir Categoría
                    </h3>
                </div>

                <div class="panel-body" style="padding:30px">
                    <form action="/categoria" method="post">
                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                        {{ csrf_field() }}
                        {{-- TODO: Protección contra CSRF --}}

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" >
                        </div>

                        <div class="form-group">
                            {{-- TODO: Completa el input para el poster --}}
                            <label for="imagen">Imagen</label>
                            <input type="text" name="imagen" id="imagen" class="form-control" >
                        </div>

                        @include('partials.errors')

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir categoría
                            </button>
                        </div>

                        <div class="form-group text-center">
                            <a href="{{ route('categoria.index') }}" class="btn btn-default" style="padding:8px 100px;margin-top:25px;">Volver</a>
                        </div>
                    </form>
                    {{-- TODO: Cerrar formulario --}}



                </div>
            </div>
        </div>
    </div>
@stop
