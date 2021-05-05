<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfgfieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfgfields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('campo',25);
            $table->string('tipo',1);
            $table->integer('tamanho');
            $table->string('tabela',25);
            $table->boolean('catalogo')->default(0)->nullable();
            $table->boolean('tecnico')->default(0)->nullable();
            $table->string('designacao',50);
            $table->float('ordenacao');
            $table->boolean('obrigatorio')->default(0)->nullable();
            $table->boolean('visivel')->default(0)->nullable();
            $table->string('campoLigacao',25);
            $table->boolean('atributoDYP')->default(0)->nullable();
            $table->string('campoDescricao',25);
            $table->integer('corAgrupamento');
            $table->string('observacao',255);
            $table->boolean('leitura')->default(0)->nullable();
            $table->boolean('recurso')->default(0)->nullable();
            $table->string('abreviatura',25);
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
        Schema::dropIfExists('cfgfields');
    }
}
