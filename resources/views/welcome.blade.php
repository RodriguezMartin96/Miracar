@php
    $cargarMenu = true;
@endphp

@extends('estructuraHTML')
@section('fecha', 'Domingo, 02 de Febrero del 2025')
@section('nombreProyecto', 'Miracar')

@section('tituloPagina', 'MiraCar')

@section('titulo', 'MiraCar')

<!-- 'Contenido' -->

@section('main')

    <div class="d-flex align-items-start flex-column bd-highlight mb-3 position-relative" style="height: 200px;">
        <div class="mb-auto p-2 bd-highlight position-absolute top-50 start-50 translate-middle"><a href="/inicio"><button type="button"
                    class="mb-auto p-2 btn fs-1 text-xl-start badge rounded-pill bg-danger">Registrarse</button></a></div>
        <div class="p-2 bd-highlight"><a href="/inicio"><button type="button"
                    class="p-2 btn fs-1 text-xl-start badge rounded-pill bg-danger position-absolute top-35 start-50 translate-middle">Inicio</button></a></div>
    </div>

@endsection