<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba técnica ACFarma</title>
</head>
<body>
<div>
    <ul><a href="{{route('productos.index')}}">Productos</a></ul>
    <ul><a href="{{route('clientes.index')}}">Clientes</a></ul>
    <ul><a href="{{route('facturas.index')}}">Facturas</a></ul>
</div>
    @yield('content')
</body>
</html>
