<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>
    <script src="js/cotacao.js" type="text/javascript"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cotação</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts._includes._nav')
        
        @if(Session::has('flash_message'))
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div align="center" class="alert {{ Session::get('flash_message')['class'] }}" >
                            {{ Session::get('flash_message')['msg'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>