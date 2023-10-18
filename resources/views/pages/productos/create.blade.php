@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1>Crear producto</h1>
            <a href="{{ route('productos.index') }}">Ver listado</a>
        </div>

        <form action="{{ route('productos.store') }}" method="POST" class="mt-4">
            @csrf
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <div class="mb-3 row">
                <label for="codigo" class="col-sm-2 col-form-label">Código:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="codigo" id="codigo">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="precio" id="precio" step="0.01">
                </div>
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Guardar producto</button>
            </div>
        </form>
    </div>
@endsection
