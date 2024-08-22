<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rutas para productos
Route::get('/crear_producto', function () {
    return view('crear_producto');
});

Route::post('/crear_producto/guardar', [
    ProductoController::class, 'crearProducto'
])->name('producto.crear');

Route::get('/productos', [
ProductoController::class, 'obtenerTodosLosProductos'
]);

//Rutas para empleados
Route::get('/crear_empleado', function () {
    return view('crear_empleado');
});

Route::post('crear_empleado/guardar', [
    EmpleadoController::class, 'crearEmpleado'
])->name('empleado.crear');

Route::get('/empleados', [
    EmpleadoController::class, 'obtenerTodosLosEmpleados'
    ]);

//Rutas para proveedores
Route::get('/crear_proveedor', function () {
    return view('crear_proveedor');
});

Route::post('crear_proveedor/guardar', [
    ProveedoresController::class, 'crearProveedor'
])->name('proveedor.crear');

Route::get('/proveedores', [
    ProveedoresController::class, 'obtenerTodosLosProveedores'
    ]);