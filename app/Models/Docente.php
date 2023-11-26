<?php

namespace App\Models;
use App\Models\Semestre1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    protected $fillable = [
        'codigo',
        'nombre',
        'identificacion',
        'celular_docente',
        'email'
        
    ];
    public function semestre1 (){
        return $this->belongsToMany(Semestre1::class, 'semestre1_docentes', 'codigo', 'codigo_curso_semestre1');
      }
}
