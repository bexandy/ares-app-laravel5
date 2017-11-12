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
            <div class="panel-heading text-center"><h3>Ver Unidad de Medida</h3></div>

            <div class="panel-body">
                <form action="" method="post">
                <div class="well">
                    {{ csrf_field() }}

                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label for="abreviatura">Abreviatura</label>
                                <input type="text" name="abreviatura" id="abreviatura" class="form-control" readonly="readonly" disabled="disabled" value="{{ $medida->abreviatura }}">
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label for="simbolo">Simbolo</label>
                                <input type="text" name="simbolo" id="simbolo" class="form-control" readonly="readonly" disabled="disabled" value="{{ $medida->simbolo }}">
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" readonly="readonly" disabled="disabled" value="{{ $medida->nombre }}">
                            </div>
                        </div>
                    </div>

                </div>
                </form>
            </div>

            <div class="panel-footer text-right">
                <a href="{{ route('medida.index') }}" class="btn btn-default">Volver</a>
                <form action="{{ route('medida.destroy', ['medida' => $medida->id]) }}" method="POST" style="display: inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger" style="display: inline">Eliminar</button>
                </form>
                <a href="{{ route('medida.edit', ['medida' => $medida->id]) }}" class="btn btn-primary">Editar</a>
            </div>

        </div>

    </div>
    <div class="col-sm-4 col-md-4"></div>
</div>
@stop
