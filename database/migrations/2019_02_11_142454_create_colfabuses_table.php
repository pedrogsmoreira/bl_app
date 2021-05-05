<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColfabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colfabuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('numseq');
            $table->integer('linhaid');
            $table->string('colecao',100);
            $table->boolean('u01')->default(0);
            $table->boolean('u02')->default(0);
            $table->boolean('u03')->default(0);
            $table->boolean('u04')->default(0);
            $table->boolean('u05')->default(0);
            $table->boolean('u06')->default(0);
            $table->boolean('u07')->default(0);
            $table->boolean('u08')->default(0);
            $table->boolean('u09')->default(0);
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
        Schema::dropIfExists('colfabuses');
    }
}
