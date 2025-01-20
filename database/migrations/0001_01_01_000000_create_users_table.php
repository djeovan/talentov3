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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            //informações técnicas sobre o usuário FOTO
            $table->String('nome_imagem', length: 100) ->nullable();
            $table->String('path', length: 100) ->nullable();
            $table->date('data') ->nullable();
            //informações técnicas sobre o usuário
            $table->String('formacao', length: 100) ->nullable();
            $table->String('nome_formacao', length: 100) ->nullable();
            $table->String('especializacoes', length: 100) ->nullable();
            $table->String('cursos', length: 100) ->nullable();
            $table->String('formacao_academica', length: 100) ->nullable();
            $table->String('curriculo', length: 100) ->nullable();
            $table->date('nascimento') ->nullable();
            //algumas atualizações de colunas 
            //...

            $table->enum('role',['admin', 'user'])->default('user');
            $table->rememberToken();
            $table->timestamps();

    
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
