<?php

namespace App\Exports;

use App\Http\Resources\FacturaResource;
use App\Models\Factura;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FacturaExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            "Id",
            "Fecha",
            "Cliente",
            "Total",
        ];

    }

    public function collection()
    {
        return FacturaResource::collection(Factura::all());
    }
}
