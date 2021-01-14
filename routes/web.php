<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Lista\Productos;
use App\Http\Controllers\Lista\Categorias;
use App\Http\Controllers\Servicios;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Informacion General

Route::get('/', [General::class, 'inicio']); 

Route::get('descripcion', [General::class, 'general'] );

// Clientes

Route::get('clientes', [Clientes::class, 'listado'] )->name('listadoClientes');

Route::get('clientes/registro', [Clientes::class , 'formulario'])->name('registroClientes');

Route::post('clientes/registro', [Clientes::class, 'registrar']);

Route::get('clientes/actualizar/{id}', [Clientes::class, 'formulario_actualizar']);

Route::post('clientes/actualizar/{id}', [Clientes::class, 'actualizar']);

Route::get('clientes/detalle/{id}', [Clientes::class, 'detalle']);

Route::get('clientes/consulta', [Clientes::class, 'formulario_consultar']);

Route::post('clientes/consulta', [Clientes::class, 'consultar']);

Route::get('clientes/eliminar/{id}', [Clientes::class, 'eliminar']);

// Productos

Route::get('productos', [Productos::class, 'listado'])->name('listadoProductos');

Route::get('productos/ordenado/producto', [Productos::class, 'porProducto'])->name('porProducto');

Route::get('productos/ordenado/categoria', [Productos::class, 'porCategoria'])->name('porCategoria');

Route::get('productos/ordenado/precio', [Productos::class, 'porPrecio'])->name('porPrecio');

Route::get('productos/detalle/{id}', [Productos::class, 'detalle']);

Route::get('productos/registro', [Productos::class , 'formulario_registrar']);

Route::post('productos/registro', [Productos::class , 'registrar']);

Route::get('productos/actualizar/{id}', [Productos::class, 'formulario_actualizar']);

Route::post('productos/actualizar/{id}', [Productos::class, 'actualizar']);

Route::get('productos/eliminar/{id}', [Productos::class, 'eliminar']);

Route::get('productos/consulta', [Productos::class, 'formulario_consultar']);

Route::post('productos/consulta', [Productos::class, 'consultar']);

Route::get('productos/{id}/{descripcion?}', [Productos::class, 'descripcion']);

// Categorias 

Route::get('categorias', [Categorias::class, 'listado'])->name('listadoCategorias');

Route::get('categorias/registro', [Categorias::class , 'formulario_registrar']);

Route::post('categorias/registro', [Categorias::class, 'registrar']);

Route::get('categorias/actualizar/{id}', [Categorias::class, 'formulario_actualizar']);

Route::post('categorias/actualizar/{id}', [Categorias::class, 'actualizar']);

Route::get('categorias/eliminar/{id}', [Categorias::class, 'eliminar']);

//Servicios

Route::get('servicios/{descripcion}', [Servicios::class, 'listado']);