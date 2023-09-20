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
        Schema::create('detalle_curso', function (Blueprint $table) {
            $table->bigIncrements('idDetalle');
            $table->unsignedBigInteger('idCurso');
            $table->foreign("idCurso")
             ->references("idCurso")
             ->on("cursos")
             ->onDelete("cascade") 
             ->onUpdate("cascade");
            $table->unsignedBigInteger('idAprendiz');
            $table->foreign("idAprendiz")
             ->references("idAprendiz")
             ->on("aprendices")
             ->onDelete("cascade")
             ->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_curso');
    }
};
