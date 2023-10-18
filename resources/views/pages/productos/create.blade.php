@extends('layouts.app')

@section('content')
    <div>
        <h1>Crear producto</h1>
        <a href="{{ route('productos.index') }}">Ver listado</a>
    </div>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div>
            <label for="codigo">Código:</label>
            <input type="text" name="codigo" id="codigo">
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" step="0.01">
        </div>
        <div>
            <button type="submit">Guardar producto</button>
        </div>
    </form>
@endsection
