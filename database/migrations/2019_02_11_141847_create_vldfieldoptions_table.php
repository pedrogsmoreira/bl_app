<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVldfieldoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vldfieldoptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numSeq');
            $table->string('artigo',50);
            $table->string('campo',25);
            $table->string('valor',50);
            $table->string('atributo',25);
            $table->string('Componente', 50);
            $table->string('designacao',50);
            $table->float('ordenacao');
            $table->boolean('obrigatorio')->default(0);
            $table->boolean('naoApagar')->default(0);
            $table->boolean('leitura')->default(0);
            $table->string('atribOrigem',50);
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
        Schema::dropIfExists('vldfieldoptions');
    }
}
