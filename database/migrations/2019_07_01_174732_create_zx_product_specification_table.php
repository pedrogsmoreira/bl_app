<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZxProductSpecificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zx_product_specification', function (Blueprint $table) {
            $table->unsignedBigInteger('numSeq')->primary();
            $table->string('Codigo', 50)->nullable();
            $table->string('Atributo', 50)->nullable();
            $table->string('Valor', 50)->nullable();
            $table->boolean('Visivel')->nullable();
            $table->boolean('Obrigatorio')->nullable();
            $table->float('Ordenacao')->nullable();
            $table->string('Tipo', 1)->nullable();
            $table->string('model', 29)->nullable();
            $table->string('Igual', 50)->nullable();
            $table->string('Esconde', 50)->nullable();
            $table->boolean('Leitura')->nullable();
            $table->boolean('Catalogo')->nullable();
            $table->boolean('Tecnico')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zx_product_specification');
    }
}
