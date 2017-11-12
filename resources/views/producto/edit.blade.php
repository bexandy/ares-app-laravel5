@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content')
<div class="row">
  <div class="col-sm-2 col-md-2"></div>
  <div class="col-sm-8 col-md-8">
  <form action="{{ route('producto.update', ['producto' => $producto->id]) }}" method="post">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
    <div class="panel panel-primary">

        <div class="panel-heading text-center">
          <h3>Editar Producto</h3>
        </div>
        <div class="panel-body">

          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" class="form-control">
                  <option value="">Seleccione una Categoria</option>
                  @foreach ($categorias as $categoria)
                  <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected=selected' : null }}>{{ $categoria->nombre }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="marca_id">Marca</label>
                <select name="marca_id" class="form-control">
                  <option value="">Seleccione una Marca</option>
                  @foreach ($marcas as $marca)
                  <option value="{{ $marca->id }}" {{ $producto->marca_id == $marca->id ? 'selected=selected' : null }} >{{ $marca->nombre }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="text" name="imagen" value="{{ $producto->imagen }}" placeholder="Ruta de la Imagen" class="form-control">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for="cod_premium">Código Premium</label>
                <input type="text" name="cod_premium" value="{{ $producto->cod_premium }}" placeholder="Código del Producto en  Premium" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" placeholder="Nombre del Producto" class="form-control">
              </div>
            </div>
          </div>

        </div>
        <div class="panel-footer text-right">
            <a href="{{ route('producto.index') }}" class="btn btn-default">Volver</a>
            <button type="submit" class="btn btn-primary" >
                    Modificar Producto
            </button>
        </div>

    </div>
  </form>
  </div>
  <div class="col-sm-2 col-md-2"></div>
</div>

@stop
