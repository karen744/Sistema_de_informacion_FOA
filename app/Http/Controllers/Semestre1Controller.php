<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre1;

class Semestre1Controller extends Controller
{
    public function index()
    {
        $cursos = Semestre1::all();
        return view('pages.semestre.semestre1', compact('semestre1'));
    }

    public function create()
    {
        return view('pages.semestres_cursos.semestre1_cursos.curso-create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'codigo_curso_semestre1' => 'required',
            'nombre_curso' => 'required',
            'fecha' => 'required',
            'periodo' => 'required',
            'modalidad' => 'required',
            'grupo' => 'required'
        ]);

        try {
            // Guardar el curso en la base de datos
            Semestre1::create([
                'codigo_curso_semestre1' => $request->codigo_curso_semestre1,
                'nombre_curso' => $request->nombre_curso,
                'fecha' => $request->fecha,
                'periodo' => $request->periodo,
                'modalidad' => $request->modalidad,
                'grupo' => $request->grupo
            ]);

            // Después de registrar el curso exitosamente
            return redirect()->route('semestre1')->with('success', '¡Curso registrado exitosamente!');
        } catch (\Exception $e) {
            // Manejar el error y redirigir con un mensaje de error
            return redirect()->route('semestre1')->with('error', '¡Error al registrar el curso!');
        }
    }

    public function show($id)
    {
        $curso = Semestre1::find($id); // Obtener el curso según el ID proporcionado

        if (!$curso) {
            return redirect()->route('ruta.de.error')->with('error', 'El curso no existe'); // Redirigir si el curso no se encuentra
        }

        // En este punto, tienes el objeto $curso que representa el curso con el ID dado
        // Puedes usar $curso para mostrar detalles en tu vista o realizar otras acciones

        return view('pages.semestres_cursos.semestre1_cursos.curso-show', ['semestre1' => $curso]); // Redirigir a la vista adecuada con el objeto del curso
    }
}
