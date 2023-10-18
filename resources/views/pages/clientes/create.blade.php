@extends('layouts.app')

@section('content')
    <div>
        <h1>Crear cliente</h1>
        <a href="{{ route('clientes.index') }}">Ver listado</a>
    </div>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <div>
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres">
        </div>
        <div>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos">
        </div>
        <div>
            <label for="dni">DNI:</label>
            <input type="number" name="dni" id="dni">
        </div>
        <div>
            <button type="submit">Guardar cliente</button>
        </div>
    </form>
@endsection
