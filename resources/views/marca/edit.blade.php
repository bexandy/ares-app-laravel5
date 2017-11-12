@extends('adminlte::page')

@section('title', 'Ver Marca')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
    <div class="col-sm-3 col-md-3"></div>
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading text-center"><h3>Editar Marca</h3></div>
            <form action="{{ route('marca.update', ['marca' => $marca->id]) }}" method="post">
            <div class="panel-body">

                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <img src="{{ asset($marca->imagen) }}" alt="{{ $marca->nombre }}">

                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="text" name="imagen" id="imagen" class="form-control" value="{{ $marca->imagen }}">
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $marca->nombre }}">
                </div>
            </div>


            <div class="panel-footer text-right">
                <a href="{{ route('marca.show', ['marca' => $marca->id]) }}" class="btn btn-default">Volver</a>
                <button type="submit" class="btn btn-primary" >
                    Modificar Marca
                </button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-sm-3 col-md-3"></div>
</div>
@stop
