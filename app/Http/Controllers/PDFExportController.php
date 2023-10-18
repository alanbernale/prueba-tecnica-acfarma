<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFExportController extends Controller
{
    public function exportFacturas()
    {
        $facturas = Factura::withCount('factura_detalles')->get();

        $pdf = PDF::loadView('pdf.facturas.index', [
            'facturas' => $facturas,
        ]);

        return $pdf->stream('facturas.pdf');
    }
}
