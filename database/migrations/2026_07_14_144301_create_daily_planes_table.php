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
        Schema::create('daily_planes', function (Blueprint $table) {
        $table->id();
        $table->date('fecha');
        $table->string('direccion');
        $table->string('codigo');
        $table->foreignId('actividad_id')->constrained('activities')->cascadeOnDelete();
        $table->foreignId('trabajador_id')->constrained('workers')->cascadeOnDelete();
        $table->text('observaciones')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_planes');
    }
};
