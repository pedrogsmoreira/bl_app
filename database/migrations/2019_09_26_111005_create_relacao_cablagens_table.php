<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacaoCablagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacao_cablagens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',50)->nullable();
            $table->string('familia',50)->nullable();
            $table->string('cablagem')->nullable();
            $table->string('tipo_lampada')->nullable();
            $table->string('wattage')->nullable();
            $table->dateTime('last_update')->nullable();
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
        Schema::dropIfExists('relacao_cablagens');
    }
}
