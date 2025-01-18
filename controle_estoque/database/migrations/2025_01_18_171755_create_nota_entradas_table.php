<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notas_entrada', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('numero_nota');
            $table->string('recebedor');
            $table->integer('valor_nota');
            $table->integer('valor_frete');
            $table->integer('valor_produtos');
            $table->uuid('fornecedor')->nullable();
            $table->string('pdf_nota')->nullable();
            $table->timestamp('data_recebimento')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
    
            $table->foreign('fornecedor')->references('id')->on('fornecedores')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas_entrada');
    }
};
