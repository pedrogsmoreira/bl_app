<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColfabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colfabs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('numseq');
            $table->string('colecao',100);
            $table->text('descricao')->nullable();
            $table->string('composition',100);
            $table->string('width',100);
            $table->string('weight',100);
            $table->string('matindale',100);
            $table->string('piling',100);
            $table->string('lightfastness',100);
            $table->string('rapportver',100);
            $table->string('rapporthor',100);
            $table->string('base',100);
            $table->string('pile',100);
            $table->string('fr',100);
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
        Schema::dropIfExists('colfabs');
    }
}
