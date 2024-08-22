<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function crearProducto(Request $request){
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');
        $stock = $request->input('stock');
        $pagaIsv = $request->input('pagaIsv');

        $producto = new Producto();
        $producto->descripcion = $descripcion;
        $producto->precio = $precio;
        $producto->stock = $stock;
        $producto->pagaIsv = $pagaIsv;

        $producto->save();

        return redirect('productos');
    }

    public function obtenerTodosLosProductos(){
        $productos = Producto::all();

        return view('productos', compact('productos'));
    }
}
