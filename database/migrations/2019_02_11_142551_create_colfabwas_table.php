<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColfabwasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colfabwas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('numseq');
            $table->integer('linhaid');
            $table->string('colecao',100);
            $table->boolean('w01')->default(0);
            $table->boolean('w02')->default(0);
            $table->boolean('w03')->default(0);
            $table->boolean('w04')->default(0);
            $table->boolean('w05')->default(0);
            $table->boolean('w06')->default(0);
            $table->boolean('w07')->default(0);
            $table->boolean('w08')->default(0);
            $table->boolean('w09')->default(0);
            $table->boolean('w10')->default(0);
            $table->boolean('w11')->default(0);
            $table->boolean('w12')->default(0);
            $table->boolean('w13')->default(0);
            $table->boolean('w14')->default(0);
            $table->boolean('w15')->default(0);
            $table->boolean('w16')->default(0);
            $table->boolean('w17')->default(0);
            $table->boolean('w18')->default(0);
            $table->boolean('w19')->default(0);
            $table->boolean('w20')->default(0);
            $table->boolean('w21')->default(0);
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
        Schema::dropIfExists('colfabwas');
    }
}
