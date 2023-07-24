<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; 
use App\Models\Estudiante;


class EstudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::get();
        return view('pages.estudiantes.estudiantes', compact('estudiantes'));
    }
    public function create()
    {
        return view('pages.estudiantes.registro-estudiantes');
    }
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            // Agrega aquí las reglas de validación para cada campo del formulario
            'codigo_estudiante' => 'required',
            'nombre_estudiante' => 'required',
            'contacto' => 'required',
           
        ]);

        // Guardar el docente en la base de datos
        Estudiante::create([
            'codigo_estudiante' => $request->codigo_estudiante,
            'nombre_estudiante' => $request->nombre_estudiante,
            'contacto' => $request->contacto,
        ]);

      // Después de registrar el estudiante exitosamente
    return redirect()->route('estudiantes')->with('success', '¡Estudiante registrado exitosamente!');

    }
    



}
