<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Departamento;

class DepartamentsController extends Controller
{
    function index() {

        return view('welcome');
    }

    //insertar departamentos a base de datos
    function insertar(Request $request) { 

        $nuevoDepartamento = new Departamento;

        $nuevoDepartamento->inputDepartamento = $request->inputDepartamento;

        $nuevoDepartamento->inputEstado = $request->inputEstado;

        $nuevoDepartamento->adminDepart ="00";

        $nuevoDepartamento->save();

        return back()->with('mensaje','Departamento creado');
    }

    function crearEmpleado() {

        return view('creartrabajador');
    }

    function listarEmpleado() {
        
        return view('listaempleados');
    }

    function listarDepartamento() {
        
        return view('listadepartamentos');
    }
}
