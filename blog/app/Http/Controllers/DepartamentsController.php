<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Departamento;
use App\Models\Empleado;

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

        $nuevoDepartamento->inputCiudad = $request->inputCiudad;

        $nuevoDepartamento->adminDepart ="00";

        $nuevoDepartamento->save();

        return back()->with('mensaje','Departamento creado');
    }

    function mostrarInsertEmple(){

        //traemos todos los departamentos para el select
        $departamentos = Departamento::all();

        return view('creartrabajador', compact('departamentos'));
    }

    function crearEmpleado(Request $request) {

        $empleado = new Empleado();

        $empleado->inputNombre = $request->inputNombre;

        $empleado->inputEmail = $request->inputEmail;

        $empleado->inputPassword = $request->inputPassword;

        $empleado->inputDireccion = $request->inputDireccion;

        $empleado->inputDepartamentoEmple = $request->inputDepartamentoEmple;
        
        $empleado->inputCiudadEmple = $request->inputCiudadEmple;

        $empleado->inputZip = $request->inputZip;

        $empleado->notificame = $request->notificame;

        $empleado->save();

        return back()->with('mensaje','Empleado Creado');
    }

    function listarEmpleado() {

        $empleados = Empleado::all();
        
        return view('listaempleados', compact('empleados'));
    }

    function listarDepartamento() {

        //traemos todos los departamentos para el select
        $departamentos = Departamento::all();

        return view('listadepartamentos', compact('departamentos'));
    }

    //editar emplead
    function editarEmple(){
       
        return view('editarEmpleados');
    }
}
