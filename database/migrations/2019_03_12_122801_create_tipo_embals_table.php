<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoEmbalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_embals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 15);
            $table->string('descricao', 255);
            $table->dateTime('dh_web')->nullable();
            $table->boolean('integra_web')->default(0)->nullable();
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
        Schema::dropIfExists('tipo_embals');
    }
}
