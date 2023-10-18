@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('status'))
            <div>{{ session('status') }}</div>
        @endif

        <div>
            <h1 class="h1">Productos</h1>
            <div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.create') }}">Crear nuevo producto</a>
                    </li>
                </ul>
            </div>
        </div>

        <table class="table">
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
    </div>
@endsection
