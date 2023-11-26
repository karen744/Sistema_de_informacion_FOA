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
        Schema::create('semestre1_docentes', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('codigo_curso_semestre1');
            $table->unsignedBigInteger('codigo');

            $table->foreign('codigo_curso_semestre1')
                ->references('codigo_curso_semestre1')->on('semestre1')
                ->onDelete('cascade');

            $table->foreign('codigo')
                ->references('codigo')->on('docentes')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semestre1_docentes');
    }
};
