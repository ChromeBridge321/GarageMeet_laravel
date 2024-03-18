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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado');
            $table->date('fecha_cita');
            $table->unsignedBigInteger('talleres_mecanicos_id');
            $table->unsignedBigInteger('usuarios_id');
            $table->foreign('talleres_mecanicos_id')->references('id')->on('talleres_mecanicos');
            $table->foreign('usuarios_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
