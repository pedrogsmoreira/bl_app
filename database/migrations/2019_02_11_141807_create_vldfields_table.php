<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVldfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vldfields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numSeq');
            $table->string('artigo',50);
            $table->string('campo',25);
            $table->float('ordenacao');
            $table->boolean('obrigatorio')->default(0)->nullable();
            $table->boolean('visivel')->default(0)->nullable();
            $table->string('designacao',50);
            $table->string('filtro',255);
            $table->boolean('leitura')->default(0)->nullable();
            $table->boolean('recurso')->default(0)->nullable();
            $table->string('script',255);
            $table->integer('corAgrupa');
            $table->string('abreviatura',25)->nullable();
            $table->string('igual',50)->nullable();
            $table->string('esconde',50)->nullable();
            $table->boolean('integra_web')->default(0)->nullable();
            $table->dateTime('dh_web')->nullable();
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
        Schema::dropIfExists('vldfields');
    }
}
