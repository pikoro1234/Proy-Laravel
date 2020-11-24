<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentsController extends Controller
{
    function index() {

        return view('welcome');
    }

    function crearEmpleado() {

        return view('creartrabajador');
    }

    function listarEmpleado() {
        
        return view('listaempleados');
    }
}
