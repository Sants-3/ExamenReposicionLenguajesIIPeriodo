<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function crearEmpleado(Request $request){
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $fecha_ingreso = $request->input('fecha_ingreso');
        $salario = $request->input('salario');

        $empleado = new Empleado();
        $empleado->nombre = $nombre;
        $empleado->apellido = $apellido;
        $empleado->fechaIngreso = $fecha_ingreso;
        $empleado->salario = $salario;

        $empleado->save();

        return redirect('empleados');
    }

    public function obtenerTodosLosEmpleados(){
        $empleados = Empleado::all();

        return view('empleados', compact('empleados'));
    }
}
