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
        'id' => $id,
        'curso_semestre1' => $curso_semestre1,
        'docentes' => $docentes,
        'color' => $color, 
    ]);
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
            // Obtener la ruta del archivo subido
            $formulario_07_path = null;
            $formulario_15_path = null;
            $formulario_13_path = null;
            if ($request->hasFile('formulario_07')) {
                $formulario_07_path = $request->file('formulario_07')->store('public/formularios');
            }
            
            if ($request->hasFile('formulario_15')) {
                $formulario_15_path = $request->file('formulario_15')->store('public/formularios');
            }

            if ($request->hasFile('formulario_13')) {
                $formulario_13_path = $request->file('formulario_13')->store('public/formularios');
            }
    
            // Guardar el curso en la base de datos
            $curso = new Semestre1;
            $curso->codigo_curso_semestre1 = $validatedData['codigo_curso_semestre1'];
            $curso->nombre_curso = $validatedData['nombre_curso'];
            $curso->creditos = $validatedData['creditos'];
            $curso->fecha = $validatedData['fecha'];
            $curso->periodo = $validatedData['periodo'];
            $curso->modalidad = $validatedData['modalidad'];
            $curso->color = $validatedData['color'];
            $curso->formulario_07 = $formulario_07_path;
            $curso->formulario_15 = $formulario_15_path;
            $curso->formulario_13 = $formulario_13_path;
            $curso->save();
    
            // Después de registrar el curso exitosamente
            return redirect()->route('semestres.semestre1.index')->with('success', '¡Curso registrado exitosamente!');
        } catch (\Exception $e) {
            // Manejar el error y redirigir con un mensaje de error
            return redirect()->route('semestres.semestre1.index')->with('error', '¡Error al registrar el curso!');
        }
    }










///PRUEBA WORD
    //prueba formulario 07
    public function formulario07($id)
{
    // Aquí puedes realizar cualquier lógica adicional si es necesario
    return view('pages.semestres_cursos.semestre1_cursos.formulario07', compact('id'));
}
public function downloadForm($id)
    {
        $formPath = public_path('formulario07.docx');
        
        if (!file_exists($formPath)) {
            return redirect()->back()->with('error', 'El documento no existe');
        }
        
        return response()->download($formPath);
    }


    public function uploadDocument(Request $request, $id)
{
    // Valida la solicitud
    $request->validate([
        'formulario_07' => 'required|mimes:doc,docx|max:2048'
    ]);

    // Verifica que el archivo esté presente en la solicitud
    if (!$request->hasFile('formulario_07')) {
        return back()->with('error', 'No se ha subido ningún archivo');
    }

    // Obtén el archivo
    $file = $request->file('formulario_07');

    // Verifica si el archivo es válido
    if (!$file->isValid()) {
        return back()->with('error', 'El archivo no es válido');
    }

    // Almacena el archivo y captura la ruta
    $path = $file->store('documentos', 'public');
    if (!$path) {
        return back()->with('error', 'No se pudo almacenar el archivo');
    }

    // Verifica si se obtuvo la ruta correctamente
    if (!$path) {
        return back()->with('error', 'No se pudo almacenar el archivo');
    }

    // Obtén el curso y depura el resultado
    $curso = Semestre1::find($id);
    if (!$curso) {
        return back()->with('error', 'Curso no encontrado con el ID: ' . $id);
    }

    // Actualiza el campo formulario_07
    $curso->formulario_07 = $path;

    // Guarda el curso y depura el resultado
    if ($curso->save()) {
        return redirect()->route('semestres.semestre1.show', $id)->with('success', 'Documento subido exitosamente.');
    } else {
        return back()->with('error', 'Error al guardar en la base de datos');
    }
}



/////formulario foa 15

public function formulario15($id)
{
    // Aquí puedes realizar cualquier lógica adicional si es necesario
    return view('pages.semestres_cursos.semestre1_cursos.formulario15', compact('id'));
}

public function downloadForm15($id)
    {
        $formPath = public_path('formulario15.docx');
        
        if (!file_exists($formPath)) {
            return redirect()->back()->with('error', 'El documento no existe');
        }
        
        return response()->download($formPath);
    }


    public function uploadDocument15(Request $request, $id)
{
    // Valida la solicitud
    $request->validate([
        'formulario_15' => 'required|mimes:doc,docx|max:2048'
    ]);

    // Verifica que el archivo esté presente en la solicitud
    if (!$request->hasFile('formulario_15')) {
        return back()->with('error', 'No se ha subido ningún archivo');
    }

    // Obtén el archivo
    $file = $request->file('formulario_15');

    // Verifica si el archivo es válido
    if (!$file->isValid()) {
        return back()->with('error', 'El archivo no es válido');
    }

    // Almacena el archivo y captura la ruta
    $path = $file->store('documentos', 'public');
    if (!$path) {
        return back()->with('error', 'No se pudo almacenar el archivo');
    }

    // Verifica si se obtuvo la ruta correctamente
    if (!$path) {
        return back()->with('error', 'No se pudo almacenar el archivo');
    }

    // Obtén el curso y depura el resultado
    $curso = Semestre1::find($id);
    if (!$curso) {
        return back()->with('error', 'Curso no encontrado con el ID: ' . $id);
    }

    // Actualiza el campo formulario_15
    $curso->formulario_15 = $path;

    // Guarda el curso y depura el resultado
    if ($curso->save()) {
        return redirect()->route('semestres.semestre1.show', $id)->with('success', 'Documento subido exitosamente.');
    } else {
        return back()->with('error', 'Error al guardar en la base de datos');
    }
}


public function formulario13($id)
{
    // Aquí puedes realizar cualquier lógica adicional si es necesario
    return view('pages.semestres_cursos.semestre1_cursos.formulario13', compact('id'));
}

public function downloadForm13($id)
{
    $formPath = public_path('formulario13.docx');
    
    if (!file_exists($formPath)) {
        return redirect()->back()->with('error', 'El documento no existe');
    }
    
    return response()->download($formPath);
}

public function uploadDocument13(Request $request, $id)
{
    // Valida la solicitud
    $request->validate([
        'formulario_13' => 'required|mimes:doc,docx|max:2048'
    ]);

    // Verifica que el archivo esté presente en la solicitud
    if (!$request->hasFile('formulario_13')) {
        return back()->with('error', 'No se ha subido ningún archivo');
    }

    // Obtén el archivo
    $file = $request->file('formulario_13');

    // Verifica si el archivo es válido
    if (!$file->isValid()) {
        return back()->with('error', 'El archivo no es válido');
    }

    // Almacena el archivo y captura la ruta
    $path = $file->store('documentos', 'public');
    if (!$path) {
        return back()->with('error', 'No se pudo almacenar el archivo');
    }

    // Obtén el curso y verifica su existencia
    $curso = Semestre1::find($id);
    if (!$curso) {
        return back()->with('error', 'Curso no encontrado con el ID: ' . $id);
    }

    // Actualiza el campo formulario_13
    $curso->formulario_13 = $path;

    // Guarda el curso y verifica el éxito de la operación
    if ($curso->save()) {
        return redirect()->route('semestres.semestre1.show', $id)->with('success', 'Documento subido exitosamente.');
    } else {
        return back()->with('error', 'Error al guardar en la base de datos');
    }
}













///////////////////color y docentes
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


