@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('status'))
            <div>{{ session('status') }}</div>
        @endif

        <div>
            <h1 class="h1">Clientes</h1>
            <div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.create') }}">Crear nuevo cliente</a>
                    </li>
                </ul>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>nombres</th>
                <th>apellidos</th>
                <th>dni</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombres}}</td>
                    <td>{{$cliente->apellidos}}</td>
                    <td>{{$cliente->dni}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
