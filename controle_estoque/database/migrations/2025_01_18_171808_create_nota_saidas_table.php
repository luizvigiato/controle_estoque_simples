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
        Schema::create('notas_saida', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('numero_nota');
            $table->string('comprador');
            $table->string('vendedor');
            $table->integer('valor_nota');
            $table->integer('valor_frete');
            $table->integer('valor_produtos');
            $table->string('pdf_nota')->nullable();
            $table->timestamp('data_saida')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas_saida');
    }
};
