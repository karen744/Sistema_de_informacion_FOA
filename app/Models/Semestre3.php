<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre3 extends Model
{
    protected $table = 'semestre3';
    protected $primaryKey = 'codigo_curso_semestre3';

    protected $fillable = [
        'codigo_curso_semestre3',
        'nombre_curso',
        'creditos',
        'fecha',
        'periodo',
        'modalidad',
        
    ];
}
