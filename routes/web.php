<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\SemestreController;
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
#RUTA FORMULARIOS 01----------
Route::get('/formularios', [FormularioController::class, 'index'])->name('formulariosfoa');
Route::get('/formularios/formulario1', [FormularioController::class, 'create'])->name('formulario1.create');
Route::post('/formularios/formulario1', [FormularioController::class, 'store'])->name('formulario1.store');

#RUTA FORMULARIOS 07----------
Route::get('/formularios', [\App\Http\Controllers\Formulario07Controller::class, 'index'])->name('formulariosfoa');
Route::get('/formularios/formulario07', [\App\Http\Controllers\Formulario07Controller::class, 'create'])->name('formulario07.create');
// Route::get('/formularios', [Formulario07Controller::class, 'index'])->name('formulariosfoa');
// Route::get('/formularios/formulario07', [Formulario07Controller::class, 'create'])->name('formulario07.create');
// Route::post('/formularios/formulario07', [Formulario07Controller::class, 'store'])->name('formulario07.store');

#RUTA CURSOS-----------------------------------------------------------------------------------------
Route::get('/cursos', [CursosController::class, 'index'])->name('cursos');
Route::get('/cursos/create', [CursosController::class, 'create'])->name('cursos.create');
Route::post('/cursos/store', [CursosController::class, 'store'])->name('cursos.store');
Route::get('/cursos/show/{id}', [CursosController::class, 'show'])->name('cursos.show');

#RUTA SEMESTRES------------------------------------------------------------------------------------
Route::get('/semestres', [SemestreController::class, 'index'])->name('semestres');
Route::get('/semestres/semestre1', [SemestreController::class, 'index'])->name('semestre1');
Route::get('/semestres/semestre2', [SemestreController::class, 'index'])->name('semestre2');
Route::get('/semestres/semestre3', [SemestreController::class, 'index'])->name('semestre3');
Route::get('/semestres/semestre4', [SemestreController::class, 'index'])->name('semestre4');
Route::get('/semestres/semestre5', [SemestreController::class, 'index'])->name('semestre5');
Route::get('/semestres/semestre5', [SemestreController::class, 'index'])->name('semestre6');

#RUTA INFORMES------------------------------------------------------------------------------------
Route::get('/informes', [InformesController::class, 'index'])->name('informes');

#RUTAS DOCENTES------------------------------------------------------------------------------------
Route::get('/docentes', [DocentesController::class, 'index'])->name('docentes');
Route::get('/docentes/create', [DocentesController::class, 'create'])->name('create.docentes');
Route::post('/docentes/store', [DocentesController::class, 'store'])->name('store.docentes');
Route::get('/docentes/show/{id}', [DocentesController::class, 'show'])->name('show.docentes');

#RUTA ESTUDIANTES-------------------------------------------------------------------------------------------
Route::get('/estudiantes', [EstudiantesController::class, 'index'])->name('estudiantes');
Route::get('/estudiantes/create', [EstudiantesController::class, 'create'])->name('registro.estudiantes');
Route::post('/estudiantes/store', [EstudiantesController::class, 'store'])->name('store.estudiantes');

#EXCEL PRUEBA------------------------------------------------------------------------------------------
#Route::post('/subir-excel', [ExcelController::class, 'subirExcel'])->name('subir.excel');
Route::get('/upload', [ExcelController::class, 'showForm'])->name('upload.form');
Route::post('/import', [ExcelController::class, 'import'])->name('upload.import');
Route::get('/show-data', [ExcelController::class, 'showData'])->name('data.show');



