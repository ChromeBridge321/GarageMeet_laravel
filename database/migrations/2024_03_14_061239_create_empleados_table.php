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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personas_id');
            $table->unsignedBigInteger('tipos_cargos_id');
            $table->unsignedBigInteger('talleres_mecanicos_id');
            $table->foreign('personas_id')->references('id')->on('personas');
            $table->foreign('tipos_cargos_id')->references('id')->on('tipos_cargos');
            $table->foreign('talleres_mecanicos_id')->references('id')->on('talleres_mecanicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
