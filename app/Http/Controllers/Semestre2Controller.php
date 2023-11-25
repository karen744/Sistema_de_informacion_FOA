<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre2;

class Semestre2Controller extends Controller
{
    public function index()
    {
        $cursos = Semestre2::all();
        return view('pages.semestre.semestre2', compact('semestre2'));
    }
    public function create(){
        return view('pages.semestres_cursos.semestre2_cursos.curso-create');
      }

      public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            // Agrega aquí las reglas de validación para cada campo del formulario
            'codigo_curso_semestre2' => 'required',
            'nombre_curso' => 'required',
            'fecha' => 'required',
            'periodo' => 'required',
            'modalidad' => 'required',
            'grupo' => 'required'
           
        ]);

        // Guardar el docente en la base de datos
        Semestre2::create([
            'codigo_curso_semestre2' => $request->codigo_curso_semestre2,
            'nombre_curso' => $request->nombre_curso,
            'fecha' => $request->fecha,
            'periodo' => $request->periodo,
            'modalidad' => $request->modalidad,
            'grupo' => $request->grupo
        ]);

      // Después de registrar el Curso exitosamente
    return redirect()->route('semestre2')->with('success', '¡Curso registrado exitosamente!');

    }
    public function show($id)
{
    $curso = Semestre2::find($id); // Obtener el curso según el ID proporcionado

    if (!$curso) {
        return redirect()->route('ruta.de.error')->with('error', 'El curso no existe'); // Redirigir si el curso no se encuentra
    }

    // En este punto, tienes el objeto $curso que representa el curso con el ID dado
    // Puedes usar $curso para mostrar detalles en tu vista o realizar otras acciones

    return view('pages.semestres_cursos.semestre2_cursos.curso-show', ['semestre2' => $curso]); // Redirigir a la vista adecuada con el objeto del curso
}
}
