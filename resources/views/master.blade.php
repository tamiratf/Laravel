<html>
        <head>
                <title>@yield('title')</title>
                <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
                <link rel="stylesheet" href="{!! asset('css/bootstrap-material-design.min.css') !!}"> 
                <link rel="stylesheet" href="{!! asset('css/ripples.min.css') !!}">
        </head>
        <body>
             @include('navbar') 

            @yield('content')

            <script src="{!! asset('js/jquery-3.2.1.min.js') !!}"></script>
            <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
            <script src="{!! asset('js/ripples.min.js') !!}"></script>
            <script src="{!! asset('js/material.min.js') !!}"></script>

            <script>
                $(document).ready(function() {
                    $.material.init();
                });
            </script>
        </body>
</html>