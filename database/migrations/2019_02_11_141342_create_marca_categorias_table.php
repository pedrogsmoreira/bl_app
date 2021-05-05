<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcaCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marca_categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigoMarca',10);
            $table->string('descricaoMarca',100);
            $table->string('codigoCategoria',10);
            $table->string('descricaoCategoria',100);
            $table->integer('numSeq');
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
        Schema::dropIfExists('marca_categorias');
    }
}
