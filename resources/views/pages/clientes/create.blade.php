@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1>Crear cliente</h1>
            <a href="{{ route('clientes.index') }}">Ver listado</a>
        </div>

        <form action="{{ route('clientes.store') }}" method="POST" class="mt-4">
            @csrf
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <div class="mb-3 row">
                <label for="nombres" class="col-sm-2 col-form-label">Nombres:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nombres" id="nombres">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dni" class="col-sm-2 col-form-label">DNI:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="dni" id="dni">
                </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Guardar cliente</button>
            </div>
        </form>
    </div>
@endsection
