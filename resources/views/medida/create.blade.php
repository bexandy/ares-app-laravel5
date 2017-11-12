@extends('adminlte::page')

@section('title', 'Crear Unidad de Medida')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
    <div class="row" style="margin-top:20px">
        <div class="col-sm-4 col-md-4"></div>
        <div class="col-sm-4 col-md-4">
            <form action="{{ route('medida.store') }}" method="post">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">
                            <i class="icon-favoritefolder"></i>
                            Añadir Unidad de Medida
                        </h3>
                    </div>

                    <div class="panel-body" style="padding:30px">
                        <div class="well">
                             {{ csrf_field() }}

                            <div class="row text-center">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group row">
                                        <label for="nombre">Abreviatura</label>
                                        <input type="text" name="abreviatura" id="abreviatura" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group row">
                                        <label for="nombre">Simbolo</label>
                                        <input type="text" name="simbolo" id="simbolo" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group row">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer text-center">
                        <a href="{{ route('medida.index') }}" class="btn btn-default">Volver</a>
                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4 col-md-4"></div>
    </div>
@stop
