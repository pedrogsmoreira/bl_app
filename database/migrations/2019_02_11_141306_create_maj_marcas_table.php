<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maj_marcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('familia', 10);
            $table->string('descricao', 255);
            $table->float('bb')->nullable();
            $table->float('mv')->nullable();
            $table->float('bl')->nullable();
            $table->float('lx')->nullable();
            $table->float('cc')->nullable();
            $table->float('eh')->nullable();
            $table->float('dl')->nullable();
            $table->float('pc')->nullable();
            $table->float('cvt')->nullable();
            $table->float('fg')->nullable();
            $table->float('hs')->nullable();
            $table->float('my')->nullable();
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
        Schema::dropIfExists('maj_marcas');
    }
}
