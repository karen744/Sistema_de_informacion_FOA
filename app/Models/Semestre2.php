<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre2 extends Model

{
    protected $table = 'semestre2';
    protected $primaryKey = 'codigo_curso_semestre2';


    protected $fillable = [
        'codigo_curso_semestre2',
        'nombre_curso',
        'creditos',
        'fecha',
        'periodo',
        'modalidad',
        
    ];
}
