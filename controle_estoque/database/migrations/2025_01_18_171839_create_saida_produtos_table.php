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
        Schema::create('saida_produtos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('nota_saida');
            $table->string('nome')->nullable();
            $table->string('descricao')->nullable();
            $table->integer('quantidade');
            $table->integer('valor_unit');
            $table->integer('valor_desconto');
            $table->integer('frete');
            $table->integer('valor_total');
            $table->integer('codigo_sistema_produto');
            $table->foreign('nota_saida')->references('id')->on('notas_saida')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saida_produtos');
    }
};
