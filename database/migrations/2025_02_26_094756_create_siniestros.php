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
        Schema::create('siniestros', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->string('matricula');
            $table->string('bastidor');
            $table->date('fecha_matricula');
            $table->string('combustible');
            $table->unsignedInteger('km')->nullable();
            $table->string('color');
            $table->unsignedInteger('puertas');
            $table->string('imagenes')->nullable();
            $table->string('dayos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siniestros');
    }
};
