<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function index()
    {
        
        return view('pages.formularios');
    }
    
    public function create(){
        return view('pages.creacionFormularios.formulario1');
      }
     

    /**
     * Store the newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /*public function store(Request $request)
{
   // Validar los datos del formulario
   $validatedData = $request->validate([
    // Agrega aquí las reglas de validación para cada campo del formulario
    'codigo' => 'required',
    'nombre' => 'required',
    'descripcion' => 'required',
    'tipo' => 'required',
    'modalidad' => 'required',
    'clasificacion' => 'required',
    'lugar' => 'required',
    'fecha_inicio' => 'required',
    'fecha_fin' => 'required',
    'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    'observaciones' => 'nullable',
]);

        // Guardar el evento en la base de datos
        $evento = new Evento();
        $evento->codigo = $request->codigo;
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->tipo = $request->tipo;
        $evento->modalidad = $request->modalidad;
        $evento->clasificacion = $request->clasificacion;
        $evento->lugar = $request->lugar;
        $evento->fecha_inicio = $request->fecha_inicio;
        $evento->fecha_fin = $request->fecha_fin;
        $evento->observaciones = $request->observaciones;

        // Procesar y almacenar la imagen del evento
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoNombre = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('assets/eventos'), $fotoNombre);
            $evento->foto = $fotoNombre;
        }

        $evento->save();

        // Mostrar los datos del evento en la página
        //dd($evento);
        return redirect('/eventos');
        } */
    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
}
