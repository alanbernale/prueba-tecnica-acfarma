<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacturaDetalleRequest;
use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;

class FacturaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $factura = Factura::where('id', $id)->firstOrFail();
        $productos = Producto::all();

        return view('pages.factura-detalles.create', [
            'factura' => $factura,
            'productos' => $productos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $id, StoreFacturaDetalleRequest $request)
    {
        $validated = $request->validated();
        $factura = Factura::where('id', $id)->firstOrFail();
        $producto = Producto::where('id', $validated['producto_id'])->first();

        $facturaDetalles = $factura->factura_detalles()->create([
            'producto_id' => $producto->id,
            'costo_unitario' => $producto->precio,
            'cantidad' => $validated['cantidad'],
            'total' => $producto->precio * $validated['cantidad'],
        ]);

        $factura->total = $factura->factura_detalles->sum('total');
        $factura->save();

        return to_route('facturas.show', $factura->id)->with('status', 'Recurso creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
