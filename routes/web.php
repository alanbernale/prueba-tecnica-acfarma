<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FacturaDetalleController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

Route::get('/facturas', [FacturaController::class, 'index'])->name('facturas.index');
Route::get('/facturas/create', [FacturaController::class, 'create'])->name('facturas.create');
Route::post('/facturas', [FacturaController::class, 'store'])->name('facturas.store');
Route::get('/facturas/{factura}', [FacturaController::class, 'show'])->name('facturas.show');

Route::get('/facturas/{factura}/factura-detalles/create', [FacturaDetalleController::class, 'create'])->name('factura.factura-detalles.create');
Route::post('/facturas/{factura}/factura-detalles', [FacturaDetalleController::class, 'store'])->name('factura.factura-detalles.store');
