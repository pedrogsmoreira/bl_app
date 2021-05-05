<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volumes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linha',50);
            $table->string('Artigo',50);
            $table->float('quantidade');
            $table->float('comprimento');
            $table->float('largura');
            $table->float('espessura');
            $table->float('cubico');
            $table->string('descricao',100);
            $table->string('referencia',20);
            $table->string('caixa',20);
            $table->float('peso');
            $table->string('processo',50);
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
        Schema::dropIfExists('volumes');
    }
}
