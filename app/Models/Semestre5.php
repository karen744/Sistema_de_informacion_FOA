<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre5 extends Model
{
    protected $table = 'semestre5';
    protected $primaryKey = 'codigo_curso_semestre5';

    protected $fillable = [
        'codigo_curso_semestre5',
        'nombre_curso',
        'creditos',
        'fecha',
        'periodo',
        'modalidad',
    ];
}
