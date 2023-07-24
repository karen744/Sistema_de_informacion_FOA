<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocentesController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();
        return view('pages.docentes.docentes', compact('docentes'));
    }

    public function create()
    {
        return view('pages.docentes.create-docentes');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            // Agrega aquí las reglas de validación para cada campo del formulario
            'codigo' => 'required',
            'nombre' => 'required',
            'identificacion' => 'required',
            'celular_docente' => 'required',
            'email' => 'required',
        ]);

        // Guardar el docente en la base de datos
        Docente::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'identificacion' => $request->identificacion,
            'celular_docente' => $request->celular_docente,
            'email' => $request->email,
        ]);

      // Después de registrar el docente exitosamente
    return redirect()->route('docentes')->with('success', '¡Docente registrado exitosamente!');

    }

    public function show($id)
    {
        $docente = Docente::find($id); // Obtener el docente por su ID

        return redirect()->route('docentes')->with('success', 'Docente registrado exitosamente.');
    }
}
