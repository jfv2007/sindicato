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
        Schema::create('plantillas', function (Blueprint $table) {
            $table->id();
            $table->string('ficha');
            $table->string('nombre')->Nullable();
            $table->string('depto')->Nullable();
            $table->string('ct')->Nullable();
            $table->string('seccional')->Nullable();
            $table->string('direccion')->Nullable();
            $table->string('cp')->Nullable();
            $table->string('estado')->Nullable();
            $table->string('provincia')->Nullable();
            $table->string('curp')->Nullable();
            $table->string('telefono')->Nullable();
            $table->string('correo')->Nullable();
            $table->string('sexo')->Nullable();
            $table->string('sangre')->Nullable();
            $table->string('situacionc')->Nullable();
            $table->string('depto_des')->Nullable();
            $table->string('cargo')->Nullable();
            $table->string('foto')->Nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantillas');
    }
};
