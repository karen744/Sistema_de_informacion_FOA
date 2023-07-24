<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelController extends Controller
{
    public function subirExcel(Request $request)
    {
        // Validar que se haya enviado un archivo y sea de tipo Excel
        $request->validate([
            'archivo_excel' => 'required|mimes:xlsx,xls',
        ]);

        // Obtener el archivo subido
        $archivo = $request->file('archivo_excel');

        // Procesar el archivo Excel
        $objPHPExcel = IOFactory::load($archivo);
        $hojas = $objPHPExcel->getAllSheets();

        // Puedes hacer lo que necesites con las hojas y sus datos aquí
        // Por ejemplo, puedes iterar sobre las hojas y mostrar sus nombres y datos

        foreach ($hojas as $hoja) {
            $nombreHoja = $hoja->getTitle();
            $datos = $hoja->toArray();

            // Aquí puedes trabajar con $nombreHoja y $datos como necesites
        }

        // Redireccionar o devolver una respuesta
        return redirect()->back()->with('success', 'Archivo Excel subido y procesado exitosamente.');
    }

    
}