<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
</head>
<body>
    <h1>Vista para ver todos los proveedores</h1>

    <table>
        <thead>
        <tr>
            <td>NOMBRE</td>
            <td>FECHA REGISTRO</td>
            <td>TELEFONO</td>
            <td>CORREO</td>
        </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->fechaRegistro}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>{{$proveedor->correo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>