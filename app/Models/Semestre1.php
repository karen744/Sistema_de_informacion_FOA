<?php

namespace App\Models;
use App\Models\Docente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre1 extends Model
{
    protected $table = 'semestre1';
    protected $primaryKey = 'codigo_curso_semestre1';

    protected $fillable = [
        'codigo_curso_semestre1',
        'nombre_curso',
        'creditos',
        'fecha',
        'periodo',
        'modalidad',
        'color',
        'formulario_07'
        
    ];

    public function docentes()
    {
        return $this->belongsToMany(Docente::class, 'semestre1_docentes', 'codigo_curso_semestre1', 'codigo');
    }
}
