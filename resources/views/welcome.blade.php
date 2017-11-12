@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row text-center" style="margin-bottom: 50px;">
            <img src="{{ asset('img/logo_400x400.png') }}" style="width: 200px; height: auto;">

        </div>
        <div class="well">
            <br><br>



            <div class="row text-center" style="margin-bottom: 20px;">
                <a href="{{ route('clientes') }}"><button type="button" class="btn btn-circle text-center" style="background: rgb(29, 187, 234);"><i class="glyphicon glyphicon-bullhorn" style="font-size: 50px;"></i><br>Cola de Espera</button></a>
                <a href="{{ route('ventas') }}"><button type="button" class="btn btn-circle text-center" style="background-color: rgb(38, 128, 184);"><i class="glyphicon glyphicon-list-alt" style="font-size: 50px;"></i><br>Pedidos</button></a>
                <a href="{{ route('despacho') }}"><button type="button" class="btn btn-circle text-center" style="background-color: rgb(228, 80, 19);"><i class="glyphicon glyphicon-shopping-cart" style="font-size: 50px;"></i><br>Despacho</button></a>
            </div>
            <div class="row text-center">
                <a href="{{ route('admin') }}"><button type="button" class="btn btn-circle text-center" style="background: rgb(29, 187, 234); opacity:1;"><i class="glyphicon glyphicon-cog" style="font-size: 50px;"></i><br>Admin</button></a>
                <a href=""><button type="button" class="btn btn-circle text-center" style="background-color: rgb(38, 128, 184); opacity:1;"><i class="glyphicon glyphicon-signal" style="font-size: 50px;"></i><br>Reportes</button></a>
                <a href="{{ route('login') }}"><button type="button" class="btn btn-circle" style="background-color: rgb(228, 80, 19); opacity:1;"><i class="glyphicon glyphicon-lock" style="font-size: 50px;"></i><br>Login</button></button></a>
            </div>
        </div>



    </div>


@endsection
