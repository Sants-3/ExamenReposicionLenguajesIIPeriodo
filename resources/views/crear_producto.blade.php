<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Vista Para Crear Productos</h1>

    <form action="{{route('producto.crear')}}" method="post">
        @csrf
        <div>
            <label for="descripcion">Descripcion: </label>
            <input type="text" name="descripcion" id="id_descripcion">
        </div>
        <div>
            <label for="precio">Precio: </label>
            <input type="text" name="precio" id="id_precio">
        </div>
        <div>
            <label for="stock">Stock: </label>
            <input type="number" name="stock" id="id_stock">
        </div>
        <div>
            <label for="pagaIsv">pagaIsv: </label>
            <select name="pagaIsv" id="id_pagaIsv">
                <option value="0">NO</option>
                <option value="1">SI</option>
            </select>
        </div>
        <div>
            <button type="submit">Crear Producto</button>
        </div>
    </form>
</body>
</html>