@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div>
        <h1>Clientes</h1>
        <a href="{{ route('clientes.create') }}">Crear nuevo cliente</a>
    </div>

    <table>
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
@endsection
