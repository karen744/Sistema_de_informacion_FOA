<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre1;
use App\Models\Docente;

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
        'color' => 'required',
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
            'color' => $request->color,
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
    // Obtener el curso según el ID proporcionado
    $curso_semestre1 = Semestre1::find($id);

    // Verificar si el curso no existe
    if (!$curso_semestre1) {
        // Redirigir si el curso no se encuentra
        return redirect()->route('ruta.de.error')->with('error', 'El curso no existe');
    }
    
    $color = $curso_semestre1->color;
    // Obtener los docentes asociados al curso
    $docentes = $curso_semestre1->docentes;



    // Devolver la vista con los datos necesarios
    return view('pages.semestres_cursos.semestre1_cursos.curso-show', [
        'curso_semestre1' => $curso_semestre1,
        'docentes' => $docentes,
        'color' => $color, 
    ]);
}


public function getColorClass($curso)
{
    // Lógica para determinar el color basado en las propiedades del curso
    // Puedes ajustar esto según las propiedades específicas de tus cursos

    if ($curso === 'Teorica') {
        return 'bg-primary'; // Clase para color de fondo azul
    } else {
        return 'bg-secondary'; // Clase para otros casos
    }
}

public function addDocente(Request $request, $id)
{
    // Validar el formulario, si es necesario
    
    $request->validate([
        'seleccionados' => 'required|array',
        'seleccionados.*' => 'exists:docentes,codigo', // Asegura que todos los seleccionados existan en la tabla docentes
    ]);
    dd($request->all());
    // Obtener los docentes seleccionados por sus códigos
    $docentesSeleccionados = Docente::whereIn('codigo', $request->input('seleccionados'))->get();

    // Asociar cada docente al curso
    $curso = Semestre1::find($id);
    
    foreach ($docentesSeleccionados as $docente) {
        $curso->docentes()->attach($docente->id);
    }

    return redirect()->route('semestres.semestre1.show', $id)
        ->with('success', '¡Docentes añadidos al curso exitosamente!');
}
}
