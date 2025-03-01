<!--
Nombre: Román.
Apellidos: Rodríguez Martín.
Fecha: @yield('fecha').
Descripción: Página web - @yield('nombreProyecto').
-->

<!DOCTYPE html>
<html lang='es'>
<head>

    <meta charset='UTF-8'>
    <link rel="icon" href="{!! asset('galeria/logotipo.png') !!}" type="image/png">
    <title>@yield('tituloPagina')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
    <body>

    <header>
            <div id = 'titulo'>
                @if(!isset($cargarEncabezado))
                    @include('encabezado')
                @endif
                @if( !isset($cargarMenu) )
                    @include('nav')
                @endif
            </div>
    </header>
    
        <main class = 'main'>
            @yield('main')
        </main>

    <footer class = 'footer'>
        @yield('footer')
    </footer>

    </body>
</html>