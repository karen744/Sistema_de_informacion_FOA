<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function index()
    {
       
        return view('pages.semestres.semestres');
    }

   

    public function semestre1()
    {
        // Lógica específica para Semestre 1
        return view('pages.semestres_cursos.semestre1_cursos.semestre1');
    }

    public function semestre2()
    {
        // Lógica específica para Semestre 2
        return view('pages.semestres_cursos.semestre2_cursos.semestre2');
    }

    public function semestre3()
    {
        // Lógica específica para Semestre 3
        return view('pages.semestres_cursos.semestre3_cursos.semestre3');
    }

    public function semestre4()
    {
        // Lógica específica para Semestre 4
        return view('pages.semestres_cursos.semestre4_cursos.semestre4');
    }

    public function semestre5()
    {
        // Lógica específica para Semestre 5
        return view('pages.semestres_cursos.semestre5_cursos.semestre5');
    }

    public function semestre6()
    {
        // Lógica específica para Semestre 6
        return view('pages.semestres_cursos.semestre6_cursos.semestre6');
    }
}
