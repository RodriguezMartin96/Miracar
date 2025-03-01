<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siniestro;
use App\Models\Cliente;

class SiniestroController extends Controller
{
    public function nueSiniestro()
    {
        $MARCAS = Siniestro::MARCAS;
        $COMBUSTIBLES = Siniestro::COMBUSTIBLES;
        $CLIENTES = Cliente::all();
        $operacion = 'crear';
        return view('siniestroAlta', compact('MARCAS', 'COMBUSTIBLES', 'CLIENTES', 'operacion'));
    }

    public function nueCliente()
    {
        $operacion = 'crear';
        return view('clientesAlta', compact('operacion'));
    }

    public function siniestroGuardar(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'matricula' => 'required|string|max:255',
            'bastidor' => 'required|string|max:255',
            'fechaMatricula' => 'required|date',
            'combustible' => 'required|string|max:255',
            'km' => 'required|integer',
            'color' => 'required|string|max:255',
            'puerta' => 'required|integer',
            'imagen.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'dayos' => 'required|string|max:255',
        ]);

        $siniestro = new Siniestro();
        $siniestro->marca = $request->marca;
        $siniestro->modelo = $request->modelo;
        $siniestro->matricula = $request->matricula;
        $siniestro->bastidor = $request->bastidor;
        $siniestro->fecha_matricula = $request->fechaMatricula;
        $siniestro->combustible = $request->combustible;
        $siniestro->km = $request->km;
        $siniestro->color = $request->color;
        $siniestro->puertas = $request->puerta;
        $siniestro->dayos = $request->dayos;

        if ($request->hasFile('imagen')) {
            $imagenes = [];
            foreach ($request->file('imagen') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $imageName);
                $imagenes[] = 'images/' . $imageName;
            }
            $siniestro->imagenes = json_encode($imagenes);
        }

        $siniestro->save();

        return redirect()->route('nuevoSiniestro.nueSiniestro')->with('success', 'Siniestro creado exitosamente.');
    }

    public function clienteGuardar(Request $request)
    {
        $request->validate([
            'nombre'            => 'required|string',
            'apellidos'         => 'required|string',
            'dni'               => 'required|string',
            'direccion'         => 'required|string',
            'telefonoPri'       => 'required|integer',
            'telefonoSeg'       => 'nullable|integer',
            'email'             => 'required|string',
        ]);

        $cliente = new Cliente();
        $cliente->nombre            = $request->nombre;
        $cliente->apellidos         = $request->apellidos;
        $cliente->dni               = $request->dni;
        $cliente->direccion         = $request->direccion;
        $cliente->telefonoPri       = $request->telefonoPri;
        $cliente->telefonoSeg       = $request->telefonoSeg;
        $cliente->email             = $request->email;

        $cliente->save();

        return redirect()->route('nuevoCliente.nueCliente')->with('success', 'Cliente creado exitosamente');


    }
}