<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_seq')->nullable();
            $table->string('codigo', 50)->nullable();
            $table->float('comprimento')->nullable();
            $table->float('largura')->nullable();
            $table->float('altura')->nullable();
            $table->float('profundidade')->nullable();
            $table->float('diametro')->nullable();
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
        Schema::dropIfExists('measures');
    }
}
