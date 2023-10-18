@extends('layouts.app')

@section('content')
    <div class="container">
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

            <div class="mb-3 row">
                <label for="producto_id" class="col-sm-2 col-form-label">Producto:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="producto_id" id="producto_id">
                        <option value="">-- Seleccionar --</option>
                        @foreach($productos as $producto)
                            <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="cantidad" id="cantidad">
                </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Guardar detalle</button>
            </div>
        </form>
    </div>
@endsection
