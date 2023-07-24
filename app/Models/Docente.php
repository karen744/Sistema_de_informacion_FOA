<?php

namespace App\Models;

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
}
