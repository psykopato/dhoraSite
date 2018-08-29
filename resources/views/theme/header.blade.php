<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<style>
    .nav-link{
        font-family: sans-serif;
        font-size: 20px;
        text-transform: uppercase;
        color: black;
    }

    #magic-line {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100px;
        height: 4px;
        background: #fe4902;
    }

    .header-bar{
        height: 100px;
        background: #a12327;

    }

    .logo{
        top: 25px;
        position: relative;
        z-index: 100;
        width: 250px;
        height: auto;
    }

    .nav-link{
        font-family: sans-serif;
        font-size: 20px;
        text-transform: uppercase;
        color: black;
    }

    body, html {
        height: 100%;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light header-bar">
    <div class="collapse navbar-collapse order-0 justify-content-end" >
        <ul class="navbar-nav navbar-right " >
            <li class="nav-item">
                <a class="nav-link" href="#">QUERO COMER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">iFOOD</a>
            </li>
        </ul>
    </div>
    <div class="order-1">
        <a class="navbar-brand" href="#">
            <img class="logo" src="{{URL::asset('/images/logo_no_bg.png')}}" />
        </a>
    </div>
    <div class="collapse navbar-collapse order-2">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="#">CONTATO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">QUEM SOMOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
        </ul>
    </div>
</nav>
<script>
    $(function () {
        var $el,
                leftPos,
                newWidth,
                $mainNav = $(".navbar-nav");

        $mainNav.append("<li id='magic-line'></li>");
        var $magicLine = $("#magic-line");
        $magicLine
                .width($(".active").width())
                .css("left", $(".active a").position().left)
                .data("origLeft", $magicLine.position().left)
                .data("origWidth", $magicLine.width());

        $(".navbar-nav li a").hover(
                function () {
                    $el = $(this);
                    leftPos = $el.position().left;
                    newWidth = $el.parent().width();
                    $magicLine.stop().animate({
                        left: leftPos,
                        width: newWidth
                    });
                },
                function () {
                    $magicLine.stop().animate({
                        left: $magicLine.data("origLeft"),
                        width: $magicLine.data("origWidth")
                    });
                }
        );
    });
</script>
