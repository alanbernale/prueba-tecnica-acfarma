@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1>Crear factura</h1>
            <a href="{{ route('facturas.index') }}">Ver listado</a>
        </div>

        <form action="{{ route('facturas.store') }}" method="POST" class="mt-4">
            @csrf
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <div class="mb-3 row">
                <label for="cliente_id" class="col-sm-2 col-form-label">Cliente:</label>
                <div class="col-sm-10">
                    <select name="cliente_id" id="cliente_id" class="form-select">
                        <option value="">-- Seleccionar --</option>
                        @foreach($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->nombres . ' ' . $cliente->apellidos}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="fecha" id="fecha">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="observacion" class="col-sm-2 col-form-label">Observación:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="observacion" id="observacion" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Guardar factura</button>
            </div>
        </form>
    </div>
@endsection
