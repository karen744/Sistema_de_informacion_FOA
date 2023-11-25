<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('semestre1', function (Blueprint $table) {
            $table->id('codigo_curso_semestre1');
            $table->string('nombre_curso');
            $table->string('fecha');
            $table->string('periodo');
            $table->string('modalidad');
            $table->string('grupo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semestre1');
    }
};
