<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #piemenu > svg { width: 100%; height: 100%; }
            #piemenu { height: 400px; width: 400px; margin:auto; }
            @media (max-width: 400px) { #piemenu { height: 300px; width: 300px; } }

            [class|=wheelnav-piemenu-slice-basic] { fill: #497F4C; stroke: none; }
            [class|=wheelnav-piemenu-slice-selected] { fill: #497F4C; stroke: none; }
            [class|=wheelnav-piemenu-slice-hover] { fill: #497F4C;  stroke: none; fill-opacity: 0.77; cursor: pointer; }

            [class|=wheelnav-piemenu-title-basic] { fill: #333; stroke: none; }
            [class|=wheelnav-piemenu-title-selected] { fill: #fff; stroke: none; }
            [class|=wheelnav-piemenu-title-hover] { fill: #222; stroke: none; cursor: pointer; }
            [class|=wheelnav-piemenu-title] > tspan { font-family: Impact, Charcoal, sans-serif; font-size: 24px; }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div id='piemenu' data-wheelnav
             data-wheelnav-slicepath='PieSlice'
             data-wheelnav-rotateoff
             data-wheelnav-navangle='270'
             data-wheelnav-cssmode 
             data-wheelnav-init>
            <div data-wheelnav-navitemtext='0' onmouseup='alert("Place your logic here.");'></div>
            <div data-wheelnav-navitemtext='1' onmouseup='alert("Place your logic here.");'></div>
            <div data-wheelnav-navitemtext='2' onmouseup='alert("Place your logic here.");'></div>
            <div data-wheelnav-navitemtext='3' onmouseup='alert("Place your logic here.");'></div>
        </div>
        <script type="text/javascript">
            var piemenu = new wheelnav('piemenu');
            piemenu.clockwise = false;
            piemenu.wheelRadius = piemenu.wheelRadius * 0.83;
            piemenu.createWheel();
        </script>
    </body>
</html>
