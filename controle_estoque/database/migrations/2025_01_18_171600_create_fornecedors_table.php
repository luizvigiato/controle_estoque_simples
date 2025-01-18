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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('razao_social');
            $table->string('cnpj');
            $table->string('endereco')->nullable();
            $table->integer('cep')->nullable();
            $table->string('telefone');
            $table->string('estado');
            $table->string('cidade');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedores');
    }
};
