@extends('estructuraHTML')
@section('tituloPagina', 'Nuevo Cliente')
@section('fecha', 'Domingo, 02 de Febrero del 2025')
@section('nombreProyecto', 'Miracar')

<!-- 'Encabezado' -->
@section('titulo', 'Nuevo Cliente')
<!-- 'Menu' -->

<!-- 'Contenido' -->

@section('main')

    <!-- 'Secciones' -->

    <section>

    @php
        if( session('nuevoCliente') )
            $cliente = session('nuevoCliente');

        $disable = '';
        $boton_guardar = '<button type="submit" class="crear btn btn-success">Crear</button>';
        if( session('nuevoCliente') || $operacion == 'constante' || $operacion == 'suprimir')
        {
            $disable = 'disabled';

            if( $operacion == 'suprimir' )
                $boton_guardar = '<button type="submit" class="crear btn btn-success">Eliminar</button>';
            else
                $boton_guardar = '';
        }
    @endphp

        <form id='altaCliente' action= {{ route('nuevoCliente.clienteGuardar') }} method='post'
            enctype='application/x-www-form-urlencoded' autocomplete='on' target='_self'>
            @csrf
            <fieldset>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos">
                </div>

                <div class="mb-3">
                    <label for="dni" class="form-label">Dni:</label>
                    <input type="text" id="dni" name="dni" class="form-control" placeholder="00000000A">
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="C/ La Plaza, Nº01">
                </div>

                <div class="mb-3">
                    <label for="telefonoPri" class="form-label">Primer Teléfono:</label>
                    <input type="tel" id="telefonoPri" name="telefonoPri" class="form-control" placeholder="600000000">
                </div>

                
                <div class="mb-3">
                    <label for="telefonoSeg" class="form-label">Segundo Teléfono:</label>
                    <input type="tel" id="telefonoSeg" name="telefonoSeg" class="form-control" placeholder="600000000">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="ejemplo@gmail.com">
                </div>

                {!! $boton_guardar !!}
            </fieldset>
        </form>
    </section>

@endsection