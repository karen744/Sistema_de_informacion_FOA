<?php

namespace App\Imports;

use App\Models\Estudiante;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class EstudiantesImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        
        return new Estudiante([
            'codigo' => $row['codigo'],
            'nombres' => $row['nombres'],
            'contacto' => $row['contacto'],
        ]);
        
    
    }

    public function batchSize(){
        return 3; //indica el tamaño de cada lote que se va a insertar en la base de datos
    }

    
}

