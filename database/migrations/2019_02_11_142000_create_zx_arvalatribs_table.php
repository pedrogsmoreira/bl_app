<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZxArvalatribsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zx_arvalatribs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numSeq')->nullable();
            $table->string('artigo', 50)->nullable();
            $table->string('campo', 50)->nullable();
            $table->string('valor', 50)->nullable();
            $table->float('majPercent')->nullable();
            $table->float('majValor')->nullable();
            $table->float('majPercentD')->nullable();
            $table->float('majValorD')->nullable();
            $table->string('campoOrigem', 50)->nullable();
            $table->boolean('custom')->default(false)->nullable();
            $table->boolean('upDiscount')->default(false)->nullable();
            $table->boolean('integra_web')->default(false)->nullable();
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
        Schema::dropIfExists('zx_arvalatribs');
    }
}
