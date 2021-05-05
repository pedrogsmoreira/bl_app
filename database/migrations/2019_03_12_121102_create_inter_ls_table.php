<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterLsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inter_ls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 20)->nullable();
            $table->string('descricao', 255)->nullable();
            $table->float('BB')->nullable();
            $table->float('MV')->nullable();
            $table->float('PC')->nullable();
            $table->float('LX')->nullable();
            $table->float('EH')->nullable();
            $table->float('DL')->nullable();
            $table->float('CVT')->nullable();
            $table->float('BL')->nullable();
            $table->float('CC')->nullable();
            $table->float('FG')->nullable();
            $table->float('HS')->nullable();
            $table->float('MY')->nullable();
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
        Schema::dropIfExists('inter_ls');
    }
}
