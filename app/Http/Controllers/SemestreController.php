<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function index()
    {
        return view('pages.semestres.semestres');
    }
}
