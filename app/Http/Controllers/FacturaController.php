<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacturaRequest;
use App\Models\Cliente;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturas = Factura::withCount('factura_detalles')->get();

        return view('pages.facturas.index', [
            'facturas' => $facturas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();

        return view('pages.facturas.create', [
            'clientes' => $clientes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacturaRequest $request)
    {
        $validated =  $request->validated();

        $factura = new Factura([
            'cliente_id' => $validated['cliente_id'],
            'total' => 0,
            'fecha' => $validated['fecha'],
            'observacion' => $validated['observacion'],
        ]);

        $factura->save();

        return to_route('facturas.show', $factura->id)->with('status', 'Recurso creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $factura = Factura::where('id', $id)->firstOrFail();

        return view('pages.facturas.show', [
            'factura' => $factura,
        ]);
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
