@extends('adminlte::page')

@section('title', 'Ver Producto')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
  <div class="col-sm-2 col-md-2"></div>
  <div class="col-sm-8 col-md-8">

    <div class="panel panel-primary">

        <div class="panel-heading text-center">
          <h3>Crear Nuevo Producto</h3>
        </div>
        <div class="panel-body">
          <form action="" method="post">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <input type="text" name="categoria_id" value="{{ $producto->categoria->nombre }}" class="form-control" readonly="readonly" disabled="disabled" >
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="marca_id">Marca</label>
                <input type="text" name="marca_id" value="{{ $producto->marca->nombre }}" class="form-control" readonly="readonly" disabled="disabled">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <img src="{{ asset($producto->imagen)}}" alt="{{ $producto->nombre }}" readonly="readonly" disabled="disabled">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="cod_premium">Código Premium</label>
                <input type="text" name="cod_premium" value="{{ $producto->cod_premium }}" class="form-control" readonly="readonly" disabled="disabled">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" readonly="readonly" disabled="disabled">
              </div>
            </div>
          </div>
          </form>
        </div>
        <div class="panel-footer text-right">
            <a href="{{ route('producto.index') }}" class="btn btn-default">Volver</a>
            <form action="{{ route('producto.destroy', ['producto' => $producto->id]) }}" method="POST" style="display: inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger" style="display: inline">
                        Eliminar Producto
                </button>
            </form>
            <a href="{{ route('producto.edit', ['producto' => $producto->id]) }}" class="btn btn-primary">Editar Producto</a>
        </div>

    </div>

  </div>
  <div class="col-sm-2 col-md-2"></div>
</div>

@stop
