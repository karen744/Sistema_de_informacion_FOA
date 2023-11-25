<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\Semestre1Controller;
use App\Http\Controllers\Semestre2Controller;
use App\Http\Controllers\Semestre3Controller;
use App\Http\Controllers\Semestre4Controller;
use App\Http\Controllers\Semestre5Controller;
use App\Http\Controllers\Semestre6Controller;
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

Route::prefix('/semestres')->group(function () {
    Route::get('/semestre1', [SemestreController::class, 'semestre1'])->name('semestre1');
    Route::get('/semestre2', [SemestreController::class, 'semestre2'])->name('semestre2');
    Route::get('/semestre3', [SemestreController::class, 'semestre3'])->name('semestre3');
    Route::get('/semestre4', [SemestreController::class, 'semestre4'])->name('semestre4');
    Route::get('/semestre5', [SemestreController::class, 'semestre5'])->name('semestre5');
    Route::get('/semestre6', [SemestreController::class, 'semestre6'])->name('semestre6');
});

#RUTA SEMESTRE1------------------------------------------------------------------------------------
Route::get('/semestre/semestre1/create', [Semestre1Controller::class, 'create'])->name('semestre1_cursos.create');
Route::post('/semestre/semestre1/store', [Semestre1Controller::class, 'store'])->name('semestre1_cursos.store');
Route::get('/semestre/semestre1/{id}', [Semestre1Controller::class, 'show'])->name('semestre1_cursos.show');
#RUTA SEMESTRE2------------------------------------------------------------------------------------
Route::get('/semestre/semestre2/create', [Semestre1Controller::class, 'create'])->name('semestre2_cursos.create');
Route::post('/semestre/semestre2/store', [Semestre1Controller::class, 'store'])->name('semestre2_cursos.store');
Route::get('/semestre/semestre2/{id}', [Semestre1Controller::class, 'show'])->name('semestre2_cursos.show');
#RUTA SEMESTRE3------------------------------------------------------------------------------------
Route::get('/semestre/semestre3/create', [Semestre1Controller::class, 'create'])->name('semestre3_cursos.create');
Route::post('/semestre/semestre3/store', [Semestre1Controller::class, 'store'])->name('semestre3_cursos.store');
Route::get('/semestre/semestre3/{id}', [Semestre1Controller::class, 'show'])->name('semestre3_cursos.show');
#RUTA SEMESTRE4------------------------------------------------------------------------------------
Route::get('/semestre/semestre4/create', [Semestre1Controller::class, 'create'])->name('semestre4_cursos.create');
Route::post('/semestre/semestre4/store', [Semestre1Controller::class, 'store'])->name('semestre4_cursos.store');
Route::get('/semestre/semestre4/{id}', [Semestre1Controller::class, 'show'])->name('semestre4_cursos.show');
#RUTA SEMESTRE5------------------------------------------------------------------------------------
Route::get('/semestre/semestre5/create', [Semestre1Controller::class, 'create'])->name('semestre5_cursos.create');
Route::post('/semestre/semestre5/store', [Semestre1Controller::class, 'store'])->name('semestre5_cursos.store');
Route::get('/semestre/semestre5/{id}', [Semestre1Controller::class, 'show'])->name('semestre5_cursos.show');
#RUTA SEMESTRE6------------------------------------------------------------------------------------
Route::get('/semestre/semestre6/create', [Semestre1Controller::class, 'create'])->name('semestre6_cursos.create');
Route::post('/semestre/semestre6/store', [Semestre1Controller::class, 'store'])->name('semestre6_cursos.store');
Route::get('/semestre/semestre6/{id}', [Semestre1Controller::class, 'show'])->name('semestre6_cursos.show');


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



