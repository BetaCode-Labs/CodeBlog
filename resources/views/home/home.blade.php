@extends('home.master')

@section('Contenido')
    {{-- SECCION BANNER --}}
    <section class="youplay-banner banner-top youplay-banner-parallax">
        @include('home.partes.banner')
    </section>

    {{-- SECCION CARRUSEL CURSOS--}}
    <div class="youplay-carousel" data-autoplay="5000">
        @include('home.partes.cursos')
    </div>


    {{-- SECCION INFECCIÓN--}}
    <div class="h2"></div>
    <section class="youplay-banner youplay-banner-parallax small">
        @include('home.partes.infeccion')
    </section>


    {{-- SECCION BLOG--}}
    <h3 class="container h1">Nuevas Tutoriales</h3>
    <section class="youplay-news container">
        <ul class="pager">
            @include('home.partes.blog')
        </ul>
    </section>

    {{-- SECCION PROYECTOS--}}
    <!--   <section class="youplay-banner youplay-banner-parallax small mt-80">
        @include('home.partes.proyectos')
            </section>
        -->
    {{-- SECCION FOOTER --}}
    <footer class="youplay-footer-parallax">
        @include('home.partes.foot')
    </footer>