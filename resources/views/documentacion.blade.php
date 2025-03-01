@extends('estructuraHTML')
@section('tituloPagina', 'Documentación')
@section('fecha', 'Domingo, 02 de Febrero del 2025')
@section('nombreProyecto', 'Miracar')

<!-- 'Encabezado' -->
@section('titulo', 'Documentación')

<!-- 'Contenido' -->

@section('main')

        <!-- 'Secciones' -->

        <section>
                        <form id='documento' action=/nuevoDocumento/nueDocumento" )}}' method='post'
                                        enctype='application/x-www-form-urlencoded' autocomplete='on' target='_self'>
                                        @csrf
                                        <fieldset>

                                                        <div class="mb-3">
                                                                        <label for="documento" class="form-label">Documento:</label>
                                                                        <input type="file" id="documento" class="form-control">
                                                        </div>

                                                        <button type="submit" class="crear btn btn-success">Agregar</button>
                                        </fieldset>
                        </form>
        </section>

@endsection