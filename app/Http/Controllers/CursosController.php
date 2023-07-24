<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;


class CursosController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('pages.crearcursos.cursos', compact('cursos'));
    }
    public function create(){
        return view('pages.crearcursos.curso-create');
      }

      public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            // Agrega aquí las reglas de validación para cada campo del formulario
            'codigo_curso' => 'required',
            'nombre_curso' => 'required',
            'semestre' => 'required',
            'periodo' => 'required',
            'modalidad' => 'required',
            'grupo' => 'required'
           
        ]);

        // Guardar el docente en la base de datos
        Curso::create([
            'codigo_curso' => $request->codigo_curso,
            'nombre_curso' => $request->nombre_curso,
            'semestre' => $request->semestre,
            'periodo' => $request->periodo,
            'modalidad' => $request->modalidad,
            'grupo' => $request->grupo
        ]);

      // Después de registrar el Curso exitosamente
    return redirect()->route('cursos')->with('success', '¡Curso registrado exitosamente!');

    }
    

    
}
