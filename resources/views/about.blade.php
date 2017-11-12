@extends('layouts.master')

@section('content')
  <div class="container-panel">
    <div class="row text-center" style="margin-bottom: 50px;">
      <img src="{{ asset('img/logo_400x400.png') }}" style="width: 250px; height: auto;">

    </div>
    <div class="wrap cf">
      <div class="page page-start active" data-page="start">

        <div data-panel="uk" class="panel panel-link textcenter time1">
          <span class="panel-icon icon-uk"></span>
          <span class="panel-title">UK</span>
        </div>

        <div data-panel="store" class="panel panel-link textcenter time2">
          <span class="panel-icon icon-store"></span>
          <span class="panel-title">Deliver to store</span>
        </div>

        <div data-panel="int" class="panel panel-link textcenter time3">
          <span class="panel-icon "></span>
          <span class="panel-title">International</span>
        </div>

        <div data-panel="bfpo" class="panel panel-link textcenter time4">
          <span class="panel-icon "></span>
          <span class="panel-title">BFPO</span>
        </div>

      </div> <!-- /page-start -->
    </div> <!-- /wrapper-->

  </div>
  @isset($seccion)
    <h1>{{ $seccion }}</h1>
  @endisset

  @isset($marcas)
  <ul>
    @foreach ($marcas as $marca)
      <li>{{ $marca->nombre }} : {{ $marca->imagen }}</li>
    @endforeach
    </ul>
  @endisset

@endsection
