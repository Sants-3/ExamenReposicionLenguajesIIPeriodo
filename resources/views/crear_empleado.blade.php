<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Vista Para Crear Empleados</h1>

    <form action="{{route('empleado.crear')}}" method="post">
        @csrf
        <div>
            <label for="nombre">Nombre del Empleado: </label>
            <input type="text" name="nombre" id="id_nombre">
        </div>
        <div>
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" id="id_apellido">
        </div>
        <div>
            <label for="fecha_ingreso">Fecha de Ingreso: </label>
            <input type="date" name="fecha_ingreso" id="id_fecha_ingreso">
        </div>
        <div>
            <label for="salario">Salario: </label>
            <input type="text" name="salario" id="id_salario">
        </div>
        <div>
            <button type="submit">Crear Empleado</button>
        </div>
    </form>
</body>
</html>