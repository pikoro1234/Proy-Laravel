<?php

use App\Http\Controllers\DepartamentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [DepartamentsController::class,'index'])->name('departamentos');


//ruta obtenemos datos de departamento
Route::post('/', [DepartamentsController::class,'insertar'])->name('departamentos');



Route::get('crearempleado', [DepartamentsController::class,'mostrarInsertEmple'])->name('crearEmpleado');



Route::post('crearempleado', [DepartamentsController::class,'crearEmpleado'])->name('creartrabajador');



Route::get('listaempleados', [DepartamentsController::class,'listarEmpleado'])->name('listadoEmpleados');



Route::get('listadepartamentos', [DepartamentsController::class,'listarDepartamento'])->name('listadoDepartamentos');


//ruta editar usuario
Route::get('editarempleado/{id}', [DepartamentsController::class,'editarEmpleado'])->name('editarempleado');


//ruta actualizar empleado
Route::post('editarempleado/{id}', [DepartamentsController::class,'actualizarEmpleado'])->name('editarempleado');


//eliminar empleado
Route::post('eliminar/{id}', [DepartamentsController::class,'eliminarEmpleado'])->name('eliminar');