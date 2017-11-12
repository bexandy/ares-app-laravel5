@extends('adminlte::page')

@section('title', 'Listado de Productos')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row"><h1>Listado de Productos</h1></div>

<div class="panel panel-primary">
    <div class="panel-heading text-center">
        <h3>Seleccione Categoría</h3>
    </div>
    <div class="panel-body text-center">
        <div class="row">
            <div class="col-sm-6 col-md-6"><h3>Productos Disponibles</h3></div>
        </div>
        <div class="row well text-center">
            @foreach($arrayProductos as $producto)

                <div class="col-sm-6 col-md-2">
                    <a href="{{ route('producto.show', ['producto' => $producto->id]) }}" class="thumbnail">
                            <img src="{{ asset($producto->imagen)}}" alt="{{ $producto->nombre }}">
                            <div class="caption">
                                <h5 id="producto{{ $producto->id }}"><strong>{{ $producto->nombre }}</strong></h5>
                                <p>Categoría: {{ $producto->categoria->nombre }}</p>
                                <p>Marca: {{ $producto->marca->nombre }}</p>
                            </div>
                    </a>
                </div>

            @endforeach
        </div>

    </div>
    <div class="panel-footer text-right">
        <a href="{{ route('admin') }}" class="btn btn-default">Volver</a>
        <a href="{{ route('producto.create') }}" class="btn btn-primary">Crear Nuevo Producto</a>
    </div>
</div>
@stop
