<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pagina-inicio', function () {
    return view('welcome');
})->name('garegemet');




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/talleres', [App\Http\Controllers\TalleresController::class, 'index'])->name('talleres');
Route::get('/talleres', [App\Http\Controllers\TalleresController::class, 'buscar'])->name('buscar_talleres');
Route::get('/citas', [App\Http\Controllers\CitasController::class, 'index'])->name('citas');
Route::get('/empleados', [App\Http\Controllers\EmpleadosController::class, 'index'])->name('empleados');
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
Route::get('/historial', [App\Http\Controllers\HistorialController::class, 'index'])->name('historial');

route::post('/agregar_cliente', [App\Http\Controllers\ClientesController::class, 'store'])->name('clientes.create');
route::post('/actualizar_cliente', [App\Http\Controllers\ClientesController::class, 'update'])->name('clientes.update');
route::get('/eliminar_cliente-{id}', [App\Http\Controllers\ClientesController::class, 'delete'])->name('clientes.delete');
route::get('/bucar_cliente', [App\Http\Controllers\ClientesController::class, 'search'])->name('buscar');


route::post('/agregar_empleado', [App\Http\Controllers\EmpleadosController::class, 'store'])->name('empleados.create');
route::post('/actualizar_empleado', [App\Http\Controllers\EmpleadosController::class, 'update'])->name('empleados.update');
route::get('/eliminar_empleado-{id}', [App\Http\Controllers\EmpleadosController::class, 'delete'])->name('empleados.delete');
route::get('/buscar_empleado', [App\Http\Controllers\EmpleadosController::class, 'search'])->name('buscar_e');
