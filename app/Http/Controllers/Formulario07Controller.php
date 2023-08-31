<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formulario07Controller extends Controller
{
    public function index()
    {
        
        return view('pages.creacionFormularios.formularios');
    }
    
    public function create(){
        return view('pages.creacionFormularios.formulario07');
      }
     
}
