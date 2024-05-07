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


Route::get('/semestres/semestre1', [Semestre1Controller::class, 'index'])->name('semestres.semestre1.index');
Route::get('/semestres/semestre2', [Semestre2Controller::class, 'index'])->name('semestres.semestre2.index');
Route::get('/semestres/semestre3', [Semestre3Controller::class, 'index'])->name('semestres.semestre3.index');
Route::get('/semestres/semestre4', [Semestre4Controller::class, 'index'])->name('semestres.semestre4.index');
Route::get('/semestres/semestre5', [Semestre5Controller::class, 'index'])->name('semestres.semestre5.index');
Route::get('/semestres/semestre6', [Semestre6Controller::class, 'index'])->name('semestres.semestre6.index');


#RUTA SEMESTRE1------------------------------------------------------------------------------------
Route::get('/semestres/semestre1/create', [Semestre1Controller::class, 'create'])->name('semestres.semestre1.create');
Route::post('/semestres/semestre1/store', [Semestre1Controller::class, 'store'])->name('semestres.semestre1.store');
Route::get('/semestres/semestre1/{id}', [Semestre1Controller::class, 'show'])->name('semestres.semestre1.show');
Route::post('/semestres/semestre1/{id}/addDocente', [Semestre1Controller::class, 'addDocente'])->name('semestres.semestre1.addDocente');

#RUTA SEMESTRE2------------------------------------------------------------------------------------
Route::get('/semestres/semestre2/create', [Semestre2Controller::class, 'create'])->name('semestres.semestre2.create');
Route::post('/semestres/semestre2/store', [Semestre2Controller::class, 'store'])->name('semestres.semestre2.store');
Route::get('/semestres/semestre2/{id}', [Semestre2Controller::class, 'show'])->name('semestres.semestre2.show');

#RUTA SEMESTRE3------------------------------------------------------------------------------------
Route::get('/semestres/semestre3/create', [Semestre3Controller::class, 'create'])->name('semestres.semestre3.create');
Route::post('/semestres/semestre3/store', [Semestre3Controller::class, 'store'])->name('semestres.semestre3.store');
Route::get('/semestres/semestre3/{id}', [Semestre3Controller::class, 'show'])->name('semestres.semestre3.show');

#RUTA SEMESTRE4------------------------------------------------------------------------------------
Route::get('/semestres/semestre4/create', [Semestre4Controller::class, 'create'])->name('semestres.semestre4.create');
Route::post('/semestres/semestre4/store', [Semestre4Controller::class, 'store'])->name('semestres.semestre4.store');
Route::get('/semestres/semestre4/{id}', [Semestre4Controller::class, 'show'])->name('semestres.semestre4.show');

#RUTA SEMESTRE5------------------------------------------------------------------------------------
Route::get('/semestres/semestre5/create', [Semestre5Controller::class, 'create'])->name('semestres.semestre5.create');
Route::post('/semestres/semestre5/store', [Semestre5Controller::class, 'store'])->name('semestres.semestre5.store');
Route::get('/semestres/semestre5/{id}', [Semestre5Controller::class, 'show'])->name('semestres.semestre5.show');

#RUTA SEMESTRE6------------------------------------------------------------------------------------
Route::get('/semestres/semestre6/create', [Semestre6Controller::class, 'create'])->name('semestres.semestre6.create');
Route::post('/semestres/semestre6/store', [Semestre6Controller::class, 'store'])->name('semestres.semestre6.store');
Route::get('/semestres/semestre6/{id}', [Semestre6Controller::class, 'show'])->name('semestres.semestre6.show');


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
Route::post('/import', [ExcelController::class, 'import'])->name('import.excels');
Route::get('/show-data', [ExcelController::class, 'showData'])->name('data.show');

Route::post('/importar-estudiantes', [EstudiantesController::class, 'import'])->name('estudiantes.importar');





