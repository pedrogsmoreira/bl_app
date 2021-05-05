<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtimagnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artimagns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numseq')->nullable();
            $table->string('codigo',50)->nullable();
            $table->binary('imagem')->nullable();
            $table->string('caminho',255)->nullable();
            $table->boolean('integra_web')->default(0)->nullable();
            $table->dateTime('dh_web')->nullable();
            $table->string('image_id', 255)->nullable();
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
        Schema::dropIfExists('artimagns');
    }
}
