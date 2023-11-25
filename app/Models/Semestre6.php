<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre6 extends Model
{
    protected $primaryKey = 'codigo_curso_semestre6';

    protected $fillable = [
        'codigo_curso_semestre6',
        'nombre_curso',
        'fecha',
        'periodo',
        'modalidad',
        'grupo'
        
    ];
}
