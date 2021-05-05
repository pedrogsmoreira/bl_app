<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtfornsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artforns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numSeq')->nullable();
            $table->float('prioridade')->nullable();
            $table->string('fornecedor', 10)->nullable();
            $table->string('artigo', 50)->nullable();
            $table->string('artigoFornecedor', 50)->nullable();
            $table->float('comprimento')->nullable();
            $table->float('largura')->nullable();
            $table->float('espessura')->nullable();
            $table->float('compCorte')->nullable();
            $table->float('largCorte')->nullable();
            $table->float('espeCorte')->nullable();
            $table->string('acabamento', 50)->nullable();
            $table->string('especificidade', 50)->nullable();
            $table->string('versao', 50)->nullable();
            $table->string('materiaPrima', 50)->nullable();
            $table->string('linha', 50)->nullable();
            $table->string('modelo', 50)->nullable();
            $table->string('coleccao', 50)->nullable();
            $table->string('descricao', 255)->nullable();
            $table->dateTime('data')->nullable();
            $table->string('prazoMedioEntrega', 5)->nullable();
            $table->string('unidade', 5)->nullable();
            $table->float('precoMedio')->nullable();
            $table->float('preco')->nullable();
            $table->string('descontoComercial', 20)->nullable();
            $table->string('descontoPercentual', 20)->nullable();
            $table->float('precoLiquido')->nullable();
            $table->float('quantidadeDesconto')->nullable();
            $table->string('descontoQuantidade', 20)->nullable();
            $table->float('quantidadeComprada')->nullable();
            $table->string('obs', 100)->nullable();
            $table->string('certificado', 20)->nullable();
            $table->string('planoAmostragem', 10)->nullable();
            $table->string('desconto', 20)->nullable();
            $table->string('nome', 100)->nullable();
            $table->float('profundidade')->nullable();
            $table->float('altura')->nullable();
            $table->float('larguraAssento')->nullable();
            $table->float('alturaAssento')->nullable();
            $table->float('profundAssento')->nullable();
            $table->float('alturaBracos')->nullable();
            $table->float('diametro')->nullable();
            $table->float('diametro2')->nullable();
            $table->string('acab01', 15)->nullable();
            $table->string('acab02', 15)->nullable();
            $table->string('acab03', 15)->nullable();
            $table->string('acab04', 15)->nullable();
            $table->string('acab05', 15)->nullable();
            $table->string('acab06', 15)->nullable();
            $table->string('acab07', 15)->nullable();
            $table->string('acab08', 15)->nullable();
            $table->string('acab09', 15)->nullable();
            $table->string('acab10', 15)->nullable();
            $table->string('acab11', 15)->nullable();
            $table->string('acab12', 15)->nullable();
            $table->string('acab13', 15)->nullable();
            $table->string('acab14', 15)->nullable();
            $table->string('acab15', 15)->nullable();
            $table->string('acab16', 15)->nullable();
            $table->string('acab17', 15)->nullable();
            $table->string('acab18', 15)->nullable();
            $table->string('acab19', 15)->nullable();
            $table->string('acab20', 15)->nullable();
            $table->string('acab21', 15)->nullable();
            $table->string('acab22', 15)->nullable();
            $table->string('acab23', 15)->nullable();
            $table->string('acab24', 15)->nullable();
            $table->string('acab25', 15)->nullable();
            $table->string('cablagem', 15)->nullable();
            $table->string('lampada', 15)->nullable();
            $table->string('dimmer', 15)->nullable();
            $table->float('qtd01')->nullable();
            $table->string('extras', 15)->nullable();
            $table->string('ral', 10)->nullable();
            $table->string('selecao', 15)->nullable();
            $table->string('tipoCompra', 10)->nullable();
            $table->string('operadorMOV', 30)->nullable();
            $table->dateTime('dataHoraMOV')->nullable();
            $table->string('tipoEmbal', 15)->nullable();
            $table->string('fireR', 20)->nullable();
            $table->string('inter', 20)->nullable();
            $table->string('componentes', 255)->nullable();
            $table->boolean('principal')->nullable();
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
        Schema::dropIfExists('artforns');
    }
}
