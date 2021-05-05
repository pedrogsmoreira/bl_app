<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabrals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',10);
            $table->string('descricao',50);
            $table->string('categoria',50);
            $table->string('hex',50);
            $table->string('rgb',50);
            $table->integer('cor');
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
        Schema::dropIfExists('tabrals');
    }
}
