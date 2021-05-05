<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',10);
            $table->string('descricao',100);
            $table->boolean('descontoCliente')->default(0);
            $table->string('saft',1);
            $table->string('obs',255)->nullable();
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
        Schema::dropIfExists('categors');
    }
}
