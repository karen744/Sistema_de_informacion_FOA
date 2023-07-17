<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\DocentesController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
#----------------------------------------------------------
#RUTA FORMULARIOS----------

Route::get('/formularios', [FormularioController::class, 'index'])->name('formulariosfoa');
Route::get('/formularios/formulario1', [FormularioController::class, 'create'])->name('formulario1.create');
Route::post('/formularios/formulario1', [FormularioController::class, 'store'])->name('formulario1.store');

#RUTA CURSOS-----------------------------------------------------------------------------------------
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');
Route::get('/cursos/create', [CursosController::class, 'create'])->name('cursos.create');

#RUTA INFORMES------------------------------------------------------------------------------------
Route::get('/informes', [InformesController::class, 'index'])->name('informes');

#RUTAS DOCENTES------------------------------------------------------------------------------------
Route::get('/docentes', [DocentesController::class, 'index'])->name('docentes');