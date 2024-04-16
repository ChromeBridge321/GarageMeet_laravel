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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('cliente', 60);
            $table->string('vehiculo', 60);
            $table->date('fecha_sercivio');
            $table->text('servicios');
            $table->unsignedBigInteger('talleres_mecanicos_id');
            $table->foreign('talleres_mecanicos_id')->references('id')->on('talleres_mecanicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
