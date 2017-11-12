@extends('adminlte::page')

@section('title', 'Ver Marcas')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
    <div class="col-sm-3 col-md-3"></div>
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading text-center"><h3>Ver Marcas</h3></div>
            <div class="panel-body">
                <form action="/marca" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <img src="{{ asset($marca->imagen) }}" alt="{{ $marca->nombre }}">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" readonly="readonly" disabled="disabled" value="{{ $marca->nombre }}">
                    </div>
                </form>
            </div>

            <div class="panel-footer text-right">
                <a href="{{ route('marca.index') }}" class="btn btn-default">Volver</a>
                <form action="{{ route('marca.destroy', ['marca' => $marca->id]) }}" method="POST" style="display: inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" style="display: inline">
                        Eliminar Categoria
                    </button>
                </form>
                <a href="{{ route('marca.edit', ['marca' => $marca->id]) }}" class="btn btn-primary">Editar Marca</a>
            </div>

        </div>
    </div>
    <div class="col-sm-3 col-md-3"></div>
</div>
@stop
