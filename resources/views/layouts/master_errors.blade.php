<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
 
        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
 
            .full-height {
                height: 100vh;
            }
 
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
 
            .position-ref {
                position: relative;
            }
 
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
 
            .content {
                text-align: center;
            }
 
            .title {
                font-size: 40px;
            }
 
            .m-b-md {
                margin-bottom: 30px;
            }
            p {
                font-family: cursive;
            }

        </style>
    </head>
    <body>
        @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>