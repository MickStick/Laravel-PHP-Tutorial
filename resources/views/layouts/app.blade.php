<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title> {{config('app.name','LPT App')}} {{$title}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,minimum-scale=1">
        <meta name="author" content="Mikhail Rene Shaw">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $(function() {
                $('.pagination').children('li').eq(0).children('span').html("");
                $('.pagination').children('li').eq(0).children('span').append("<i class=\"material-icons grey-text\">chevron_left</i>");
                $('.pagination').children('li').eq(0).children('a').html("");
                $('.pagination').children('li').eq(0).children('a').append("<i class=\"material-icons\">chevron_left</i>");
                $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('span').html("");
                $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('span').append("<i class=\"material-icons grey-text\">chevron_right</i>");
                $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('a').html("");
                $('.pagination').children('li').eq($('.pagination').children('li').length - 1).children('a').append("<i class=\"material-icons\">chevron_right</i>");
                $('.pagination').children('li');
                for (var x = 1; x < $('.pagination').children('li').length - 1; x++) {
                    $('.pagination').children('li').eq(x).addClass("waves-effect").addClass("btn-flat");
                }
            });
        </script>
        <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <header>
            @include('include.navbar')
        </header>
        
        <div class="container">
            @yield('content')
        </div>       
      
      <script>
        window.addEventListener("load", function() {
            //$('.progress').css({ "display": "none" });
            $('.progress').animate({height:"toggle"}, 50);
        });
      </script>
    </body>
</html>