<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    @include('home.partes.head')
</head>
<body>
<div class="page-preloader preloader-wrapp">
    <img src="{{ asset('images/logo.png') }}" alt="">
    <div class="preloader"></div>
</div>


{{-- SECCION MENU --}}
@include('home.partes.menu')
<section class="content-wrap">

    @yield('Contenido')

</section>
{{-- SECCION SCRIPT --}}
@include('home.partes.scripts')

</body>
</html>
