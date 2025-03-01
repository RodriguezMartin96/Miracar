<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiniestroController;

Route::get('/', function () {
    return view('welcome'); });
Route::get('/inicio', function () {
    return view('inicio'); });
Route::get('/vehiculos', function () {
    return view('vehiculos'); });
Route::get('/documentacion', function () {
    return view('documentacion'); });
Route::get('/soporte', function () {
    return view('soporte'); });

Route::get('/nuevoCliente', [SiniestroController::class, 'nueCliente'])->name('nuevoCliente.nueCliente');
Route::post('/nuevoCliente/nuevo', [SiniestroController::class, 'clienteGuardar'])->name('nuevoCliente.clienteGuardar');

Route::get('/nuevoSiniestro', [SiniestroController::class, 'nueSiniestro'])->name('nuevoSiniestro.nueSiniestro');
Route::post('/nuevoSiniestro/nuevo', [SiniestroController::class, 'siniestroGuardar'])->name('nuevoSiniestro.siniestroGuardar');

Route::get('/nuevoDocumento', [SiniestroController::class, 'nueDocumento'])->name('nuevoDocumento.nueDocumento');
Route::post('/nuevoDocumento/nuevo', [SiniestroController::class, 'guardar'])->name('nuevoDocumento.guardar');