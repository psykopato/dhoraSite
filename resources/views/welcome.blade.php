<!doctype html>
<title>D'HORA Fast Food</title>
<style>

    #floatMenu{
        position: fixed;
    }

    .content{
        background: url(pizza1.jpg);
        width: 100%; 
        height: 100%; 
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
@extends('theme.base')
@section('content')
<div class="content">
    <div class="flex-center position-ref full-height">
        <div id="floatMenu" class="dropdown-menu d-none">
            <h6 class="dropdown-header">SALGADOS</h6>
            <a class="dropdown-item" href="#">Calabresa</a>
            <a class="dropdown-item" href="#">Filé</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">DOCES</h6>
            <a class="dropdown-item" href="#">Chocolate</a>
        </div>
        <div class="content" style="z-index: 0;" >
            <div id='piemenu' data-wheelnav
                 data-wheelnav-slicepath='PieSlice'
                 data-wheelnav-rotateoff
                 data-wheelnav-navangle='270'
                 data-wheelnav-cssmode 
                 data-wheelnav-init>
                <div data-wheelnav-navitemtext='0' onmouseup='menuSabor();'></div>
                <div data-wheelnav-navitemtext='1' onmouseup='menuSabor();'></div>
                <div data-wheelnav-navitemtext='2' onmouseup='menuSabor();'></div>
                <div data-wheelnav-navitemtext='3' onmouseup='menuSabor();'></div>
            </div>
        </div>
    </div>
</div>
@stop


