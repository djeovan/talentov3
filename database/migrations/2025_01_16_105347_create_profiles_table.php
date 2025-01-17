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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->String('nome_imagem', length: 100);
            $table->String('path', length: 100);
            $table->date('data');
            $table->String('formacao', length: 100);
            $table->String('nome_formacao', length: 100);
            $table->String('especializacoes', length: 100);
            $table->String('cursos', length: 100);
            $table->String('formacao_academica', length: 100);
            $table->String('curriculo', length: 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
