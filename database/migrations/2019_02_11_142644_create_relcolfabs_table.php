<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelcolfabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relcolfabs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('numseq');
            $table->integer('linhaid');
            $table->string('colecao',100);
            $table->string('codigo',50);
            $table->boolean('integra_web')->default(0)->nullable();
            $table->dateTime('dh_web')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relcolfabs');
    }
}
