@extends('adminlte::page')

@section('title', 'Ver Categoría')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
    <div class="col-sm-3 col-md-3"></div>
    <div class="col-sm-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading text-center"><h3>Ver Categoría</h3></div>
            <div class="panel-body">
                <form action="/categoria" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <img src="{{ asset($categoria->imagen) }}" alt="{{ $categoria->nombre }}">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" readonly="readonly" disabled="disabled" value="{{ $categoria->nombre }}">
                    </div>
                </form>
            </div>

            <div class="panel-footer text-right">
                <a href="{{ route('categoria.index') }}" class="btn btn-default">Volver</a>
                <form action="{{ route('categoria.destroy', ['categoria' => $categoria->id]) }}" method="POST" style="display: inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" style="display: inline">
                            Eliminar Categoria
                        </button>
                    </form>
                <a href="{{ route('categoria.edit', ['categoria' => $categoria->id]) }}" class="btn btn-primary">Editar Categoria</a>
            </div>

        </div>
    </div>
    <div class="col-sm-3 col-md-3"></div>
</div>
@stop
