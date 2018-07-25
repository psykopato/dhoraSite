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
            [class|=wheelnav-piemenu-title] > tspan { font-family: Impact, Charcoal, sans-serif; font-size: 12px; }
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
            <div id="floatbar" hidden="true" style="background:gray;
                 width:200px;
                 height:40px;
                 position:absolute;
                 z-index: 1;">
                <nav>
                    <h3>Floating Menu</h3>
                    <ul>
                        <li><a onclick="return false;" href="#">Menu Item 1</a></li>
                        <li><a onclick="return false;" href="#">Menu Item 2</a></li>
                        <li><a onclick="return false;" href="#">Menu Item 3</a></li>
                        <li><a onclick="return false;" href="#">Menu Item 4</a></li>
                        <li><a onclick="return false;" href="#">Menu Item 5</a></li>
                        <li><a onclick="return false;" href="#">Menu Item 6</a></li>
                        <li><a onclick="return false;" href="#">Menu Item 7</a></li>
                        <li><a onclick="return false;" href="#">Menu Item 8</a></li>
                    </ul>
                </nav>
            </div>

            <div class="content" style="z-index: 0;">
                <div id='piemenu' data-wheelnav
                     data-wheelnav-slicepath='PieSlice'
                     data-wheelnav-rotateoff
                     data-wheelnav-navangle='270'
                     data-wheelnav-cssmode 
                     data-wheelnav-init>
                    <div data-wheelnav-navitemtext='0' onmouseup='selectSabor();'></div>
                    <div data-wheelnav-navitemtext='1' onmouseup='selectSabor();'></div>
                    <div data-wheelnav-navitemtext='2' onmouseup='selectSabor();'></div>
                    <div data-wheelnav-navitemtext='3' onmouseup='selectSabor();'></div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/wheelnav@1.7.1/js/dist/raphael.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/wheelnav@1.7.1/js/dist/wheelnav.min.js"></script>
        <script type="text/javascript">
                        var piemenu = new wheelnav('piemenu');
                        piemenu.clockwise = false;
                        piemenu.wheelRadius = piemenu.wheelRadius * 0.83;
                        piemenu.createWheel();
        </script>
        <script>
            $(document).ready(function () {
                document.floatbar = $("#floatbar");
                document.isSelecting = false;
                $("body").mousemove(function (e) {
                    document.posx = e.pageX;
                    document.posy = e.pageY;
                });
                $("body").click(function (e) {
                    if (document.isSelecting && $("#floatbar").css("visibility") == "visible") {
                        document.isSelecting = false;
                    } else {
                        document.floatbar.fadeOut(250);
//                        document.floatbar.css({visibility: "hidden"});
                    }
                });
            });
            function selectSabor() {
                document.floatbar.fadeOut(250);
                document.isSelecting = true;
                let posx = document.posx;
                let posy = document.posy;
                setTimeout(function () {
                    document.floatbar.css({left: posx, top: posy});
                    document.floatbar.fadeIn(250);
//                    document.floatbar.css({visibility: "visible"});
                }, 250);
            }

        </script>
    </body>
</html>
