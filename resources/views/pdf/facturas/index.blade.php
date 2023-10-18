<div>
    <h1>Facturas</h1>
</div>

<table class="table">
    <thead>
    <tr>
        <th style="width: 40px; text-align: center;">Id</th>
        <th style="text-align: center;">Fecha</th>
        <th style="width: 250px;">Cliente</th>
        <th style="text-align: center;">Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($facturas as $factura)
    <tr>
        <td style="width: 40px; text-align: center;">{{$factura->id}}</td>
        <td style="width: 100px; text-align: center">{{$factura->fecha->format('d/m/Y')}}</td>
        <td style="width: 250px;">{{$factura->cliente->nombres . ' ' . $factura->cliente->apellidos}}</td>
        <td style="width: 100px; text-align: center">S/ {{ number_format($factura->total, 2) }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
