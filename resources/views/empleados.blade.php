<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <h1>Vista para ver todos los empleados</h1>

    <table>
        <thead>
        <tr>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>FECHA INGRESO</td>
            <td>SALARIO</td>
        </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->apellido}}</td>
                    <td>{{$empleado->fechaIngreso}}</td>
                    <td>{{$empleado->salario}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>