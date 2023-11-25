<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre3;

class Semestre3Controller extends Controller
{
    public function index()
    {
        $cursos = Semestre3::all();
        return view('pages.semestre.semestre3', compact('semestre3'));
    }
    public function create(){
        return view('pages.semestres_cursos.semestre3_cursos.curso-create');
      }

      public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            // Agrega aquí las reglas de validación para cada campo del formulario
            'codigo_curso_semestre3' => 'required',
            'nombre_curso' => 'required',
            'fecha' => 'required',
            'periodo' => 'required',
            'modalidad' => 'required',
            'grupo' => 'required'
           
        ]);

        // Guardar el docente en la base de datos
        Semestre3::create([
            'codigo_curso_semestre3' => $request->codigo_curso_semestre3,
            'nombre_curso' => $request->nombre_curso,
            'fecha' => $request->fecha,
            'periodo' => $request->periodo,
            'modalidad' => $request->modalidad,
            'grupo' => $request->grupo
        ]);

      // Después de registrar el Curso exitosamente
    return redirect()->route('semestre3')->with('success', '¡Curso registrado exitosamente!');

    }
    public function show($id)
{
    $curso = Semestre3::find($id); // Obtener el curso según el ID proporcionado

    if (!$curso) {
        return redirect()->route('ruta.de.error')->with('error', 'El curso no existe'); // Redirigir si el curso no se encuentra
    }

    // En este punto, tienes el objeto $curso que representa el curso con el ID dado
    // Puedes usar $curso para mostrar detalles en tu vista o realizar otras acciones

    return view('pages.semestres_cursos.semestre3_cursos.curso-show', ['semestre3' => $curso]); // Redirigir a la vista adecuada con el objeto del curso
}
}
