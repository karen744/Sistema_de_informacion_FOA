<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre1 extends Model
{
    protected $primaryKey = 'codigo_curso_semestre1';

    protected $fillable = [
        'codigo_curso_semestre1',
        'nombre_curso',
        'fecha',
        'periodo',
        'modalidad',
        'grupo'
        
    ];
}
