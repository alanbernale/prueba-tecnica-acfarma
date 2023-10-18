<?php

namespace App\Http\Controllers;

use App\Exports\FacturaExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    public function exportFacturas()
    {
        return Excel::download(new FacturaExport, 'facturas.xlsx');
    }
}
