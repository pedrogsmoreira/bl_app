<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referarts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('referencia',30);
            $table->string('Artigo',50);
            $table->string('descricao',255);
            $table->float('comprimento');
            $table->float('largura');
            $table->float('espessura');
            $table->string('acabamento',50);
            $table->string('especificidade',50);
            $table->string('versao',50);
            $table->string('materiaPrima',50);
            $table->string('linha',50);
            $table->float('compCorte');
            $table->float('largCorte');
            $table->float('espeCorte');
            $table->string('modelo',50);
            $table->string('coleccao',50);
            $table->float('preco');
            $table->float('precoF1');
            $table->float('precoF2');
            $table->integer('numeroOperacao')->nullable();
            $table->integer('numSeq');
            $table->float('profundidade')->nullable();
            $table->string('programa',50)->nullable();
            $table->string('processo',50)->nullable();
            $table->float('altura')->nullable();
            $table->float('larguraAssento')->nullable();
            $table->float('alturaAssento')->nullable();
            $table->float('profundAssento')->nullable();
            $table->float('alturaBracos')->nullable();
            $table->float('diametro')->nullable();
            $table->float('diametro2')->nullable();
            $table->string('acab01',15)->nullable();
            $table->string('acab02',15)->nullable();
            $table->string('acab03',15)->nullable();
            $table->string('acab04',15)->nullable();
            $table->string('acab05',15)->nullable();
            $table->string('acab06',15)->nullable();
            $table->string('acab07',15)->nullable();
            $table->string('acab08',15)->nullable();
            $table->string('acab09',15)->nullable();
            $table->string('acab10',15)->nullable();
            $table->string('acab11',15)->nullable();
            $table->string('acab12',15)->nullable();
            $table->string('acab13',15)->nullable();
            $table->string('acab14',15)->nullable();
            $table->string('acab15',15)->nullable();
            $table->string('acab16',15)->nullable();
            $table->string('acab17',15)->nullable();
            $table->string('acab18',15)->nullable();
            $table->string('acab19',15)->nullable();
            $table->string('acab20',15)->nullable();
            $table->string('acab21',15)->nullable();
            $table->string('acab22',15)->nullable();
            $table->string('acab23',15)->nullable();
            $table->string('acab24',15)->nullable();
            $table->string('acab25',15)->nullable();
            $table->string('cablagem',15)->nullable();
            $table->string('lampada',15)->nullable();
            $table->string('dimmer',15)->nullable();
            $table->float('qtd01')->nullable();
            $table->string('extras',15)->nullable();
            $table->string('ral',10)->nullable();
            $table->string('selecao',15)->nullable();
            $table->float('preco2')->nullable();
            $table->string('tipoEmbal', 15)->nullable();
            $table->string('firer', 20)->nullable();
            $table->string('inter', 20)->nullable();
            $table->float('leadTime')->nullable();
            $table->string('tipoRef',50)->nullable();
            $table->string('novo',1)->nullable();
            $table->boolean('cAcab')->default(0);
            $table->boolean('cMed')->default(0);
            $table->boolean('cComCol')->default(0);
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
        Schema::dropIfExists('referarts');
    }
}
