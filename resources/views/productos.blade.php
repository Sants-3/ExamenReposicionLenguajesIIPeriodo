<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Vista para ver todos los productos</h1>

    <table>
        <thead>
        <tr>
            <td>DESCRIPCION</td>
            <td>PRECIO</td>
            <td>STOCK</td>
            <td>PAGA ISV</td>
        </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->pagaIsv}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>