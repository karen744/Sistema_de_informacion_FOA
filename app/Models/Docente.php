<?php

namespace App\Models;
use App\Models\Semestre1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';
    protected $primaryKey = 'codigo';

    protected $fillable = [
        'codigo',
        'nombre',
        'identificacion',
        'celular_docente',
        'email'
        
    ];
    public function cursos()
    {
        return $this->belongsToMany(Semestre1::class, 'curso_docente', 'codigo_docente', 'codigo_curso_semestre1');
    }
}
