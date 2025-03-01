@extends('estructuraHTML')
@section('tituloPagina', 'Nuevo Siniestro')
@section('fecha', 'Domingo, 02 de Febrero del 2025')
@section('nombreProyecto', 'Miracar')

<!-- 'Encabezado' -->
@section('titulo', 'Nuevo Siniestro')
<!-- 'Menu' -->

<!-- 'Contenido' -->

@section('main')

    <!-- 'Secciones' -->

    <section>

        @php
            if (session('nuevoSiniestro'))
                $siniestro = session('nuevoSiniestro');

            $disable = '';
            $boton_guardar = '<button type="submit" class="crear btn btn-success">Crear</button>';
            if (session('nuevoSiniestro') || $operacion == 'constante' || $operacion == 'suprimir') {
                $disable = 'disabled';

                if ($operacion == 'suprimir')
                    $boton_guardar = '<button type="submit" class="crear btn btn-success">Eliminar</button>';
                else
                    $boton_guardar = '';
            }
        @endphp


        <form id='altaSiniestro' action="{{ route('nuevoSiniestro.siniestroGuardar') }}" method='post' enctype='multipart/form-data'
            autocomplete='on' target='_self'>
            @csrf
            <fieldset>

                <div class="mb-3">
                    <label for="cliente" class="form-label">Cliente:</label>
                    <select id="cliente" name="cliente" class="form-select cliente">
                        <option value=''>Selecciona al cliente...</option>
                        @foreach($CLIENTES as $cliente)
                            <option value='{{ $cliente->id }}'>{{ $cliente->nombre }} {{ $cliente->apellidos }} - {{ $cliente->dni }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca:</label>
                    <select id="marca" name="marca" class="form-select marca">
                        <option value=''>Selecciona una marca...</option>
                        @foreach($MARCAS as $clave_marca => $texto_marca)
                            <option value='{{ $clave_marca }}'>{{ $texto_marca }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="modelo" class="form-label">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo">
                </div>

                <div class="mb-3">
                    <label for="matricula" class="form-label">Matricula:</label>
                    <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matricula">
                </div>

                <div class="mb-3">
                    <label for="bastidor" class="form-label">Bastidor:</label>
                    <input type="text" id="bastidor" name="bastidor" class="form-control" placeholder="Número del bastidor">
                </div>

                <div class="mb-3">
                    <label for="fechaMatricula" class="form-label">Fecha de Matriculación:</label>
                    <input type="date" id="fechaMatricula" name="fechaMatricula" class="form-control"
                        placeholder="Fecha de matriculación">
                </div>

                <div class="mb-3">
                    <label for="combustible" class="form-label">Combustible:</label>
                    <select id="combustible" name="combustible" class="form-select combustible">
                        <option value=''>Selecciona el tipo de combustible...</option>
                        @foreach($COMBUSTIBLES as $clave_combustible => $texto_combustible)
                            <option value='{{ $clave_combustible }}'>{{ $texto_combustible }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="km" class="form-label">Km:</label>
                    <input type="text" id="km" name="km" class="form-control" placeholder="Km">
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">Color Del Vehículo:</label>
                    <input type="text" id="color" name="color" class="form-control" placeholder="Color">
                </div>

                <div class="mb-3">
                    <label for="puerta" class="form-label">Cantidad De Puertas:</label>
                    <input type="text" id="puerta" name="puerta" class="form-control" placeholder="Puertas">
                </div>

                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagenes De Daños:</label>
                    <input type="file" id="imagen" name="imagen[]" class="form-control" multiple>
                </div>

                <div class="mb-3">
                    <label for="dayos" class="form-label">Daños:</label>
                    <textarea id="dayos" name="dayos" class="form-control" rows="7"
                        placeholder="Descripción de daños"></textarea>
                </div>

                {!! $boton_guardar !!}

            </fieldset>
        </form>
    </section>

@endsection