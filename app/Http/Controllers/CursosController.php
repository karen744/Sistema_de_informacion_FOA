<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {
        
        return view('pages.cursos');
    }
    public function create(){
        return view('pages.crearcursos.curso-create');
      }
    
}
