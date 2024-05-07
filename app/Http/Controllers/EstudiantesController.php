<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; 
use App\Models\Estudiante;
use App\Imports\EstudiantesImport;
use Illuminate\Support\Facades\Log;

class EstudiantesController extends Controller
{
    public function index()
    {
       // $estudiantes = Estudiante::get();
        $estudiantes = Estudiante::all();
        return view('pages.estudiantes.estudiantes', compact('estudiantes'));
    }


    //pruebaExcel________________________________________________________________________
    public function import(Request $request)
    {
        $request->validate([
            'archivo_excel' => 'required|mimes:xlsx,xls'
        ]);

        $archivo = $request->file('archivo_excel');

        Excel::import(new EstudiantesImport, $archivo);
        // Validar los datos del formulario
  
        return redirect()->route('estudiantes')->with('success', 'Estudiantes importados exitosamente');
    }
//





    public function create()
    {
        return view('pages.estudiantes.registro-estudiantes');
    }

   /* public function store(Request $request)
{
    // Validar los datos del formulario
    $validatedData = $request->validate([
        'codigo' => 'sometimes|string',
        'nombres' => 'required|string', // Cambiado a required
        'contacto' => 'sometimes|string',
        // ... (otros campos validados)
    ]);

    // Verificar si se proporcionaron datos pegados para códigos de estudiantes
    if ($request->has('codigo')) {
        $codigoEstudiantes = explode("\n", $request->input('codigo'));

        // Iterar sobre los códigos de estudiantes y guardar en la base de datos
        foreach ($codigoEstudiantes as $codigo) {
            // Validar que el código no esté vacío
            $codigo = trim($codigo);
            if (!empty($codigo)) {
                Estudiante::create([
                    'codigo' => $codigo,
                ]);
            }
        }
    }

    // Verificar si se proporcionaron datos pegados para nombres y contactos de estudiantes
    if ($request->has('nombres') && $request->has('contacto')) {
        $nombresEstudiantes = explode("\n", $request->input('nombres'));
        $contactosEstudiantes = explode("\n", $request->input('contacto'));

        // Verificar si la cantidad de nombres y contactos es la misma
        if (count($nombresEstudiantes) == count($contactosEstudiantes)) {
            // Iterar sobre los nombres y contactos de estudiantes y guardar en la base de datos
            for ($i = 0; $i < count($nombresEstudiantes); $i++) {
                $nombre = trim($nombresEstudiantes[$i]);
                $contacto = trim($contactosEstudiantes[$i]);
            
                // Validar que el nombre no esté vacío antes de crear un nuevo estudiante
                if (!empty($nombre)) {
                    Estudiante::create([
                        'codigo' => $codigoEstudiantes[$i] ?? null,
                        'nombres' => $nombre,
                        'contacto' => $contacto,
                    ]);
                }
            }
        } else {
            // Manejar el caso en el que la cantidad de nombres y contactos no coincide
            return redirect()->route('estudiantes')->with('error', 'La cantidad de nombres y contactos no coincide.');
        }
    }

    // Después de registrar los estudiantes exitosamente
    return redirect()->route('estudiantes')->with('success', '¡Estudiantes registrados exitosamente!');
} */


public function listarEstudiantes()
{
    $estudiantes = Estudiante::all();

    return view('pages.estudiantes.estudiantes', compact('estudiantes'));
}

/*public function subirExcel(Request $request)
    {
        // Validar que se haya enviado un archivo y sea de tipo Excel
        Log::info('Iniciando el proceso de subirExcel');
       
        $request->validate([
            'archivo_excel' => 'required|mimes:xlsx,xls',
        ]);

        // Obtener el archivo subido
        $archivo = $request->file('archivo_excel');
        

        // Procesar el archivo Excel
        $objPHPExcel = IOFactory::load($archivo);
        $hojas = $objPHPExcel->getAllSheets();
        Log::info('Excel procesado correctamente');

        // Volcar información para depuración
        dd($hojas);

        // Iterar sobre las hojas y guardar los datos en la base de datos
        foreach ($hojas as $hoja) {
            $nombreHoja = $hoja->getTitle();
            $datos = $hoja->toArray();

            // Guardar los datos en la base de datos
            foreach ($datos as $fila) {
                $codigoEstudiante = $fila[1] ?? null;
                $nombreEstudiante = $fila[2] ?? null;
                $contacto = $fila[3] ?? null;

                // Verificar que 'nombre_estudiante' y 'contacto' no sean nulos o vacíos antes de crear el estudiante
                if ($nombreEstudiante !== null && $nombreEstudiante !== '' && $contacto !== null && $contacto !== '') {
                    Estudiante::create([
                        'codigo_estudiante' => $codigoEstudiante,
                        'nombre_estudiante' => $nombreEstudiante,
                        'contacto' => $contacto,
                        // Otras columnas que puedas tener en tu modelo 'Estudiante'
                    ]);
                }
            }
        }

        // Redireccionar o devolver una respuesta
        return redirect()->route('estudiantes')->with('success', 'Datos de Excel subidos y guardados exitosamente.');
    }*/


   
}
