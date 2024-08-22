<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proveedor</title>
</head>
<body>
    <h1>Vista Para Crear Proveedores</h1>

    <form action="{{route('proveedor.crear')}}" method="post">
        @csrf
        <div>
            <label for="nombre_proveedor">Nombre del Proveedor: </label>
            <input type="text" name="nombre_proveedor" id="id_nombre_proveedor">
        </div>
        <div>
            <label for="fecha_registro">Fecha de registro del producto: </label>
            <input type="date" name="fecha_registro" id="id_fecha_registro">
        </div>
        <div>
            <label for="telefono">Teléfono: </label>
            <input type="text" name="telefono" id="id_telefono">
        </div>
        <div>
            <label for="correo">Correo: </label>
            <input type="email" name="correo" id="id_correo">
        </div>
        <div>
            <button type="submit">Crear Proveedor</button>
        </div>
    </form>
</body>
</html>