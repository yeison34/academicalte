<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\CalificacionesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesoresController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [Facultades::class, 'index']);
Route::get('/Programas/Listado',[ProgramasController::class],'Listado');
Route::get('/Estudiantes/Listado',[EstudiantesController::class],'Listado');
Route::get('/Profesores/Listado',[ProfesoresController::class],'Listado');
Route::get('/Calificaciones/Listado',[CalificacionesController::class],'Listado');






