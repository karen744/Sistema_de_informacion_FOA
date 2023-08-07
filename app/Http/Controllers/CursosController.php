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
            'fecha' => 'required',
            'semestre' => 'required',
            'periodo' => 'required',
            'modalidad' => 'required',
            'grupo' => 'required'
           
        ]);

        // Guardar el docente en la base de datos
        Curso::create([
            'codigo_curso' => $request->codigo_curso,
            'nombre_curso' => $request->nombre_curso,
            'fecha' => $request->fecha,
            'semestre' => $request->semestre,
            'periodo' => $request->periodo,
            'modalidad' => $request->modalidad,
            'grupo' => $request->grupo
        ]);

      // Después de registrar el Curso exitosamente
    return redirect()->route('cursos')->with('success', '¡Curso registrado exitosamente!');

    }
    public function show($id)
{
    $curso = Curso::find($id); // Obtener el curso según el ID proporcionado

    if (!$curso) {
        return redirect()->route('ruta.de.error')->with('error', 'El curso no existe'); // Redirigir si el curso no se encuentra
    }

    // En este punto, tienes el objeto $curso que representa el curso con el ID dado
    // Puedes usar $curso para mostrar detalles en tu vista o realizar otras acciones

    return view('pages.crearcursos.curso-show', ['curso' => $curso]); // Redirigir a la vista adecuada con el objeto del curso
}
    

    
}
