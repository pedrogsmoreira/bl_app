<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',50);
            $table->string('descricao',255);
            $table->string('abreviatura',50);
            $table->string('familia',50);
            $table->string('unidade',5);
            $table->string('iva',2);
            $table->dateTime('dataCriacao');
            $table->decimal('precoVenda1', 15, 2)->nullable();
            $table->decimal('precoVenda2', 15, 2)->nullable();
            $table->decimal('precoVenda3', 15, 2)->nullable();
            $table->decimal('precoF1', 15, 2)->nullable();
            $table->decimal('precoF2', 15, 2)->nullable();
            $table->float('comprimento');
            $table->float('largura');
            $table->string('acabamento',50);
            $table->string('especificidade',50);
            $table->string('versao',50);
            $table->float('areaM2');
            $table->float('volumeM3');
            $table->float('volumeBrutoM3');
            $table->float('peso');
            $table->integer('numeroVolumes');
            $table->string('categoria',10);
            $table->string('codigoPautal',21);
            $table->string('codigoBarras',21);
            $table->text('obs')->nullable();
            $table->boolean('inactivo')->default(0)->nullable();
            $table->string('coleccao',50);
            $table->string('modelo',50);
            $table->string('tipoArtigo',50);
            $table->dateTime('dataInicio')->nullable();
            $table->dateTime('dataFim')->nullable();
            $table->string('terceiro',10);
            $table->string('tipoTerceiro',2);
            $table->string('razaoIsencao',255);
            $table->string('codArtigo',255);
            $table->string('relAtrib',50);
            $table->string('url',255);
            $table->string('web_url',255)->nullable();
            $table->string('codAuxiliar',50);
            $table->string('tipoDoc',4);
            $table->string('gestor',10);
            $table->string('estado',2);
            $table->float('profundidade')->nullable();
            $table->string('processo',50)->nullable();
            $table->string('catProd',10)->nullable();
            $table->string('subCatProd',10)->nullable();
            $table->string('tipo',15)->nullable();
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
            $table->float('quantidadeDYP')->nullable();
            $table->string('ral',10)->nullable();
            $table->string('tipoLampada',5)->nullable();
            $table->string('selecao',15)->nullable();
            $table->string('tipoEmbal', 15)->nullable();
            $table->string('firer', 20)->nullable();
            $table->string('inter', 20)->nullable();
            $table->float('leadTime')->nullable();
            $table->integer('leadtimec')->nullable();
            $table->float('majValor')->nullable();
            $table->float('majPercent')->nullable();
            $table->string('tipoSeg',5)->nullable();
            $table->boolean('artGen')->nullable();
            $table->boolean('integra_web')->default(0)->nullable();
            $table->dateTime('dh_web')->nullable();
            $table->string('web', 3)->nullable();
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
        Schema::dropIfExists('artigos');
    }
}
