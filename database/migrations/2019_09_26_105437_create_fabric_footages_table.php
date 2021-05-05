<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFabricFootagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabric_footages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',50)->nullable();
            $table->string('familia',50)->nullable();
            $table->float('meters')->nullable();
            $table->float('inches')->nullable();
            $table->float('yards')->nullable();
            $table->float('sq_feet')->nullable();
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
        Schema::dropIfExists('fabric_footages');
    }
}
