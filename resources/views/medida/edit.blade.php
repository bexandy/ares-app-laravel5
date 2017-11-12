@extends('adminlte::page')

@section('title', 'Ver Unidad de Medida')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
    <div class="col-sm-4 col-md-4"></div>
    <div class="col-sm-4 col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading text-center"><h3>Editar Unidad de Medida</h3></div>
            <form action="{{ route('medida.update', ['medida' => $medida->id]) }}" method="post">
            <div class="panel-body">
                <div class="well">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label for="abreviatura">Abreviatura</label>
                                <input type="text" name="abreviatura" id="abreviatura" class="form-control" value="{{ $medida->abreviatura }}">
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label for="simbolo">Simbolo</label>
                                <input type="text" name="simbolo" id="simbolo" class="form-control" value="{{ $medida->simbolo }}">
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $medida->nombre }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="panel-footer text-right">
                <a href="{{ route('medida.show', ['medida' => $medida->id]) }}" class="btn btn-default">Volver</a>
                <button type="submit" class="btn btn-primary" >Modificar</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4 col-md-4"></div>
</div>
@stop
