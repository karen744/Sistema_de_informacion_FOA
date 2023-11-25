<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre1;

class Semestre1Controller extends Controller
{
    public function index()
    {
        $curso_semestre1 = Semestre1::all();
        
        return view('pages.semestres_cursos.semestre1_cursos.semestre1', compact('curso_semestre1'));
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
        'creditos' => 'required',
        'fecha' => 'required',
        'periodo' => 'required',
        'modalidad' => 'required',
    ]);

    try {
        // Guardar el curso en la base de datos
        Semestre1::create([
            'codigo_curso_semestre1' => $request->codigo_curso_semestre1,
            'nombre_curso' => $request->nombre_curso,
            'creditos' => $request->creditos,
            'fecha' => $request->fecha,
            'periodo' => $request->periodo,
            'modalidad' => $request->modalidad,
        ]);

        // Después de registrar el curso exitosamente
        return redirect()->route('semestres.semestre1.index')->with('success', '¡Curso registrado exitosamente!');
    } catch (\Exception $e) {
        // Manejar el error y redirigir con un mensaje de error
        return redirect()->route('semestres.semestre1.index')->with('error', '¡Error al registrar el curso!');
    }
}

    public function show($id)
{
    $curso_semestre1 = Semestre1::find($id); // Obtener el curso según el ID proporcionado

    if (!$curso_semestre1) {
        return redirect()->route('ruta.de.error')->with('error', 'El curso no existe'); // Redirigir si el curso no se encuentra
    }

    // En este punto, tienes el objeto $curso_semestre1 que representa el curso con el ID dado
    // Puedes usar $curso_semestre1 para mostrar detalles en tu vista o realizar otras acciones

    return view('pages.semestres_cursos.semestre1_cursos.curso-show', ['curso_semestre1' => $curso_semestre1]); // Redirigir a la vista adecuada con el objeto del curso
}
}
