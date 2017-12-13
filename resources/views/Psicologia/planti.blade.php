<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPAB') }}</title>

    <!-- Styles -->
 <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">

  <link href="{{asset('css/sweetalert2.css')}}" rel="stylesheet" type="text/css">


     @yield('css')

   </head>
<body id="body">
    <div id="app">


        <div class="container">

            @yield('content')
        </div>



    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>
