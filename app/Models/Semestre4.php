<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre4 extends Model
{
    protected $table = 'semestre4';
    protected $primaryKey = 'codigo_curso_semestre4';

    protected $fillable = [
        'codigo_curso_semestre4',
        'nombre_curso',
        'creditos',
        'fecha',
        'periodo',
        'modalidad',
        'color',
        
    ];
}
