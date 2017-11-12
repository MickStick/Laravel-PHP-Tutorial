<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title> {{config('app.name','LPT App')}} @if(isset($title)){{$title}} @endif</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,minimum-scale=1">
    <meta name="author" content="Mikhail Rene Shaw">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</head>
<body class="grey lighten-3">
    <header>
            @include('include.navbar')
    </header>
    <div class="container" id="app">
        @include('include.messages')
        @yield('content')
    </div>

    <script>
        window.addEventListener("load", function() {
            //$('.progress').css({ "display": "none" });
            $('.progress').animate({height:"toggle"}, 50);
        });
      </script>
      @yield('script')
</body>
</html>
