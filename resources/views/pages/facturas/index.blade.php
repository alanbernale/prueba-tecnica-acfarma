@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div>
        <h1>Facturas</h1>
        <a href="{{ route('facturas.create') }}">Crear nueva factura</a>
        <a href="{{ route('facturas.export-excel') }}" target="_blank">Exportar a Excel</a>
        <a href="{{ route('facturas.export-pdf') }}" target="_blank">Exportar a PDF</a>
    </div>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Cliente</th>
            <th>Total</th>
            <th>Fecha</th>
            <th>Cant. Prod.</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
            <tr>
                <td>{{$factura->id}}</td>
                <td>{{$factura->cliente->nombres . ' ' . $factura->cliente->apellidos}}</td>
                <td>S/ {{ number_format($factura->total, 2) }}</td>
                <td>{{$factura->fecha->format('d M Y')}}</td>
                <td>{{$factura->factura_detalles_count}}</td>
                <td><a href="{{route('facturas.show', $factura->id)}}">Ver detalle</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
