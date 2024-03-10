<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/citas', [App\Http\Controllers\CitasController::class, 'index'])->name('citas');
Route::get('/empleados', [App\Http\Controllers\EmpleadosController::class, 'index'])->name('empleados');
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
Route::get('/historial', [App\Http\Controllers\HistorialController::class, 'index'])->name('historial');
Route::resource('personas', App\Http\Controllers\PersonaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
