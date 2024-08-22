<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function crearProveedor(Request $request){
        $nombre = $request->input('nombre_proveedor');
        $fecha_registro = $request->input('fecha_registro');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');

        $proveedor = new Proveedores();
        $proveedor->nombre = $nombre;
        $proveedor->fechaRegistro = $fecha_registro;
        $proveedor->telefono = $telefono;
        $proveedor->correo = $correo;

        $proveedor->save();    
        
        return redirect('proveedores');
    }

    public function obtenerTodosLosProveedores(){
        $proveedores = Proveedores::all();

        return view('proveedores', compact('proveedores'));
    }
}
