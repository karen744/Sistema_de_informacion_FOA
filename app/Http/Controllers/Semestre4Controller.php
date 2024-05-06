<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre4;

class Semestre4Controller extends Controller
{
    public function index()
    {
        $curso_semestre4 = Semestre4::all();
        
        return view('pages.semestres_cursos.semestre4_cursos.semestre4', compact('curso_semestre4'));
    }

    public function create()
    {
        return view('pages.semestres_cursos.semestre4_cursos.curso-create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        //dd("Entró a la función store", $request->all());
        $validatedData = $request->validate([
            'codigo_curso_semestre4' => 'required',
            'nombre_curso' => 'required',
            'creditos' => 'required',
            'fecha' => 'required',
            'periodo' => 'required',
            'modalidad' => 'required',
            'color' => 'required',
            
        ]);

        try {
            // Guardar el curso en la base de datos
            Semestre4::create([
                'codigo_curso_semestre4' => $request->codigo_curso_semestre4,
                'nombre_curso' => $request->nombre_curso,
                'creditos' => $request->creditos,
                'fecha' => $request->fecha,
                'periodo' => $request->periodo,
                'modalidad' => $request->modalidad,
                'color' => $request->color,
            ]);

            //dd($request->all());
            // Después de registrar el curso exitosamente
            return redirect()->route('semestres.semestre4.index')->with('success', '¡Curso registrado exitosamente!');
        } catch (\Exception $e) {
            // Manejar el error y redirigir con un mensaje de error
            return redirect()->route('semestres.semestre4.index')->with('error', '¡Error al registrar el curso!');
        }
    }

    public function show($id)
{
    $curso_semestre4 = Semestre4::find($id); // Obtener el curso según el ID proporcionado

    if (!$curso_semestre4) {
        return redirect()->route('ruta.de.error')->with('error', 'El curso no existe'); // Redirigir si el curso no se encuentra
    }

    // En este punto, tienes el objeto $curso_semestre1 que representa el curso con el ID dado
    // Puedes usar $curso_semestre1 para mostrar detalles en tu vista o realizar otras acciones

    return view('pages.semestres_cursos.semestre4_cursos.curso-show', ['curso_semestre4' => $curso_semestre4]); // Redirigir a la vista adecuada con el objeto del curso
}
}
