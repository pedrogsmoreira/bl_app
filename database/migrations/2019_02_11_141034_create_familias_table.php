<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',50);
            $table->string('descricao',100);
            $table->boolean('descontoCliente')->default(0)->nullable();
            $table->string('grupoFamilia',50);
            $table->integer('nCaracteres');
            $table->integer('numerador');
            $table->string('prefixo',10);
            $table->string('sufixo',10);
            $table->string('rubrica',20);
            $table->boolean('descontoComercial')->default(0)->nullable();
            $table->boolean('descontoFinanceiro')->default(0)->nullable();
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
        Schema::dropIfExists('familias');
    }
}
