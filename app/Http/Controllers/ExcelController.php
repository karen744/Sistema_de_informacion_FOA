<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Log;

class ExcelController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx'
        ]);

        $file = $request->file('excel_file');

        ExcelController::import(new EstudiantesController, $file);

        return redirect()->route('estudiantes')->with('success', 'Datos de Excel subidos y guardados exitosamente.');
    }

    public function showData()
    {
        $data = Estudiante::all();

        return redirect()->route('estudiantes')->with('success', 'Datos de Excel subidos y guardados exitosamente.');
    }
}
