@extends('layouts.app')

@section('content')
    <div>
        <h1>Crear factura</h1>
        <a href="{{ route('facturas.index') }}">Ver listado</a>
    </div>

    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div>
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" id="cliente_id">
                <option value="">-- Seleccionar --</option>
                @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->nombres . ' ' . $cliente->apellidos}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha">
        </div>
        <div>
            <label for="observacion">Precio:</label>
            <textarea name="observacion" id="observacion" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Guardar factura</button>
        </div>
    </form>
@endsection
