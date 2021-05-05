<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtColsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_cols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('numseq')->nullable();
            $table->string('artigo', 50)->nullable();
            $table->string('coleccao', 50)->nullable();
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
        Schema::dropIfExists('art_cols');
    }
}
