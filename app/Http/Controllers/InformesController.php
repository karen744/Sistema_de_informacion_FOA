<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformesController extends Controller
{
    public function index()
    {
        
        return view('pages.informes');
    }
    
}
