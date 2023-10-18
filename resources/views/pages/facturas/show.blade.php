@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div>
        <h1>Factura {{ $factura->id }}</h1>
        <p><strong>Fecha:</strong> {{$factura->fecha->format('g:i:s a , d M Y ')}}</p>
        <p><strong>Observación:</strong> {{$factura->observacion}}</p>
    </div>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Producto</th>
            <th>Costo unitario</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($factura->factura_detalles as $detalle)
            <tr>
                <td>{{$detalle->id}}</td>
                <td>{{$detalle->producto->descripcion}}</td>
                <td>S/ {{ number_format($detalle->costo_unitario, 2) }}</td>
                <td>{{$detalle->cantidad}}</td>
                <td>S/ {{ number_format($detalle->total, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
