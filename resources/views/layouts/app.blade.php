<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title> {{config('app.name','LPT App')}} {{$title}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,minimum-scale=1">
        <meta name="author" content="Mikhail Rene Shaw">
        <link rel="stylesheet" href="{{asset(css/app.css)}}">
    </head>
    <body>
        @yield('content');
      
    </body>
</html>