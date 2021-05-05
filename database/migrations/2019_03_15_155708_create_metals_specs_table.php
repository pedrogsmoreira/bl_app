<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateMetalsSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metals_specs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 15);
            $table->string('description',50);
            $table->longText('specifications')->nullable();
            $table->longText('usedOn')->nullable();
            $table->longText('cleanAndCare')->nullable();
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
        Schema::dropIfExists('metals_specs');
    }
}
