<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ares') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

    <!-- Styles -->
    <!--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    -->
    <link href="{{url('assets/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/bootstrap/css/whhg.css')}}" rel="stylesheet">
    <link href="{{url('assets/bootstrap/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/bootstrap/css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/admin_custom.css')}}" rel="stylesheet">

        <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    @include('partials.logo')

    <div id="wrap">
        <div id="main" class="container" >

            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <!-- Scripts -->
    <!--
    <script src="{{ asset('js/app.js') }}"></script>
    -->
    <script src="{{url('assets/jquery/1.12.4/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
