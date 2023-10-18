@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div>
        <h1>Productos</h1>
        <a href="{{ route('productos.create') }}">Crear nuevo producto</a>
    </div>

    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>codigo</th>
            <th>descripcion</th>
            <th>precio</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->codigo}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>S/ {{ number_format($producto->precio, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
