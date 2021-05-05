<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZxAfetaValsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zx_afeta_vals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numSeq')->nullable();
            $table->string('artigo', 50)->nullable();
            $table->string('campoOrigem', 50)->nullable();
            $table->string('valorEscolhido', 50)->nullable();
            $table->string('campo', 50)->nullable();
            $table->string('valor', 50)->nullable();
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
        Schema::dropIfExists('zx_afeta_vals');
    }
}
