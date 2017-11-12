@extends('adminlte::page')

@section('title', 'Categorías')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
    <div class="col-sm-1 col-md-1"></div>
    <div class="col-sm-10 col-md-10">
        <div class="panel panel-primary">

            <div class="panel-heading text-center">
                <h3>Listado de Categorías</h3>
            </div>

            <div class="panel-body text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-6"><h3>Categorias Disponibles</h3></div>

                </div>
                <div class="row well text-center">
                    @foreach($arrayCategorias as $categoria)

                        <div class="col-sm-6 col-md-3">
                            <a href="{{ route('categoria.show', ['categoria' => $categoria->id]) }}" class="thumbnail">
                                <img src="{{ asset($categoria->imagen) }}" alt="{{ $categoria->nombre }}">
                                <div class="caption">
                                    <h4 id="categoria{{ $categoria->id }}">{{ $categoria->nombre }}</h4>
                                </div>
                            </a>
                        </div>

                    @endforeach
                </div>

            </div>
            <div class="panel-footer text-right">
                <a href="{{ route('admin') }}" class="btn btn-default">Volver</a>
                <a href="{{ route('categoria.create') }}" class="btn btn-primary">Crear Nueva Categoria</a>
            </div>
        </div>
    </div>
    <div class="col-sm-1 col-md-1"></div>

</div>
@stop


