@extends('layouts.app')

@section('content')
    <div>
        <h1>Crear detalle de factura</h1>
        <a href="{{ route('facturas.show', $factura->id) }}">Ver factura</a>
    </div>

    <form action="{{ route('factura.factura-detalles.store', $factura->id) }}" method="POST">
        @csrf
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div>
            <label for="producto_id">Producto:</label>
            <select name="producto_id" id="producto_id">
                <option value="">-- Seleccionar --</option>
                @foreach($productos as $producto)
                    <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad">
        </div>
        <div>
            <button type="submit">Guardar detalle</button>
        </div>
    </form>
@endsection
