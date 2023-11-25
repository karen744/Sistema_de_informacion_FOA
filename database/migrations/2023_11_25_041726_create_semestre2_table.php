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
        Schema::create('semestre2', function (Blueprint $table) {
            $table->id('codigo_curso_semestre2');
            $table->string('nombre_curso');
            $table->string('creditos');
            $table->string('fecha');
            $table->string('periodo');
            $table->string('modalidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semestre2');
    }
};
