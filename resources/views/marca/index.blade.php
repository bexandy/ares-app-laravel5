@extends('adminlte::page')

@section('title', 'Marcas')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
    <div class="col-sm-1 col-md-1"></div>
    <div class="col-sm-10 col-md-10">
        <div class="panel panel-primary">

            <div class="panel-heading text-center">
                <h3>Listado de Marcas</h3>
            </div>

            <div class="panel-body text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-6"><h3>Marcas Disponibles</h3></div>

                </div>
                <div class="row well text-center">
                    @foreach($arrayMarcas as $marca)

                        <div class="col-sm-6 col-md-3">
                            <a href="{{ route('marca.show', ['marca' => $marca->id]) }}" class="thumbnail">
                                <img src="{{ asset($marca->imagen) }}" alt="{{ $marca->nombre }}">
                                <div class="caption">
                                    <h4 id="marca{{ $marca->id }}">{{ $marca->nombre }}</h4>
                                </div>
                            </a>
                        </div>

                    @endforeach
                </div>

            </div>
            <div class="panel-footer text-right">
                <a href="{{ route('admin') }}" class="btn btn-default">Volver</a>
                <a href="{{ route('marca.create') }}" class="btn btn-primary">Crear Nueva Marca</a>
            </div>
        </div>
    </div>
    <div class="col-sm-1 col-md-1"></div>

</div>
@stop


