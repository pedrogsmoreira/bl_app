<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcabamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acabams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',15)->nullable();
            $table->string('descricao',255)->nullable();
            $table->string('tipo',50)->nullable();
            $table->string('espec',50)->nullable();
            $table->string('grau',50)->nullable();
            $table->string('categoria',50)->nullable()->nullable();
            $table->string('caminhoImagem',255)->nullable()->nullable();
            $table->boolean('pedeRal')->default(0)->nullable();
            $table->boolean('bb')->default(0)->nullable();
            $table->boolean('lx')->default(0)->nullable();
            $table->boolean('cc')->default(0)->nullable();
            $table->boolean('dl')->default(0)->nullable();
            $table->boolean('eh')->default(0)->nullable();
            $table->boolean('mv')->default(0)->nullable();
            $table->boolean('bl')->default(0)->nullable();
            $table->boolean('pc')->default(0)->nullable();
            $table->boolean('fg')->default(0)->nullable();
            $table->boolean('hs')->default(0)->nullable();
            $table->boolean('my')->default(0)->nullable();
            $table->string('componente',50)->nullable();
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
        Schema::dropIfExists('acabams');
    }
}
