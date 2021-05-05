<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZxUpcartgrausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zx_upcartgraus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numSeq');
            $table->string('artigo',50);
            $table->string('grau',50);
            $table->float('majValor');
            $table->float('majPercent');
            $table->float('majValorD');
            $table->float('majPercentD');
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
        Schema::dropIfExists('zx_upcartgraus');
    }
}
