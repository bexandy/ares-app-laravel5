@extends('adminlte::page')

@section('title', 'Unidades de Medida')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
    <div class="col-sm-4 col-md-4"></div>
    <div class="col-sm-4 col-md-4">
        <div class="panel panel-primary">

            <div class="panel-heading text-center">
                <h3>Listado de Unidades de Medida</h3>
            </div>

            <div class="panel-body text-center">
                <div class="">
                    @foreach($arrayMedidas as $medida)
                        <div class="list-group">
                            <a href="{{ route('medida.show', ['medida' => $medida->id]) }}" class="list-group-item list-group-item-default ">
                            <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <p>Abreviatura:{{ $medida->abreviatura }}</p>
                                        <p>Símbolo:{{ $medida->simbolo }}</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <h3 id="medida{{ $medida->id }}">{{ $medida->nombre }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="panel-footer text-right">
                <a href="{{ route('admin') }}" class="btn btn-default">Volver</a>
                <a href="{{ route('medida.create') }}" class="btn btn-primary">Nueva</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4"></div>

</div>
@stop


