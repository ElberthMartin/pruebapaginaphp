<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <!-- Agregar enlaces a CSS si es necesario -->
</head>
<body>
    <h1>Lista de Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>DNI</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se mostrarán los datos de los clientes -->
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->edad }}</td>
                <td>{{ $cliente->producto }}</td>
                <td>{{ $cliente->precio }}</td>
                <td>{{ $cliente->dni }}</td>
                <td>{{ $cliente->telefono }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

