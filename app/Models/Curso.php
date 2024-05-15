<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $primaryKey = 'codigo_curso';

    protected $fillable = [
        'codigo_curso',
        'nombre_curso',
        'fecha',
        'semestre',
        'periodo',
        'modalidad',
        'grupo'
        
        
    ];

  

}
