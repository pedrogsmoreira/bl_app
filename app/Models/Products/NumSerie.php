<?php

namespace App\Models\Products;

use App\Models\Products\Artigo;
use App\Models\Documents\ZxNsgc;
use App\AbstractClasses\SyncModel;
use App\Models\Documents\Web_numserie_ecf;
use App\Models\Empresas\Empresasmarca;
use App\Models\QualityControls\Qualcontrol;
use App\Models\Empresas\Empresascvt;
use App\Models\Warehouse\Inventory\StkNumSerieResult;
use App\Models\Warehouse\PrLOrd;

/**
 * Class que gere os numeros de serie dos artigos das referencias produzidas
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD aramazena os numeros de serie dos artigos que ja foram produzidos
 */
class NumSerie extends SyncModel
{
	protected static $class = self::class;
	protected static $syncColumns = ['ano' => 'Ano', 'artigo' => 'Artigo', 'catProd' => 'CatProd', 'chave' => 'Chave', 'chaveAgrup' => 'ChaveAgrup', 'chaveDono' => 'ChaveDono', 'chavePai' => 'ChavePai', 'dataEC' => 'DataEC', 'dataHora' => 'DataHora', 'docEC' => 'DocEC', 'docFP' => 'DocFP', 'docPO' => 'DocPO', 'docVFA' => 'DocVFA', 'documento' => 'Documento', 'idQtd' => 'IdQtd', 'idQtdTotal' => 'IdQtdTotal', 'idTotVols' => 'IdTotVols', 'idVol' => 'IdVol', 'linhaDocumento' => 'LinhaDocumento', 'linhaEC' => 'LinhaEC', 'linhaFP' => 'LinhaFP', 'linhaPO' => 'LinhaPO', 'linhaVFA' => 'LinhaVFA', 'marca' => 'Marca', 'nome' => 'Nome', 'numSeq' => 'NumSeq', 'numSequencial' => 'NumSequencial', 'numSequencialInt' => 'NumSequencialInt', 'numeroSerieInferior' => 'NumeroSerieInferior', 'numeroSerieNovo' => 'NumeroSerieNovo', 'numeroSerieSuperior' => 'NumeroSerieSuperior', 'operador' => 'Operador', 'qtd' => 'Qtd', 'qtdTotal' => 'QtdTotal', 'stock' => 'Stock', 'subCatProd' => 'SubCatProd', 'terceiro' => 'Terceiro', 'tipo' => 'Tipo', 'totVols' => 'TotVols', 'vols' => 'Vols', 'last_update' => 'last_update', 'lastLinhaEC' => 'LastLinhaEC', 'lastDocEC' => 'LastDocEC', 'empresa' => 'Empresa', 'marcaDono' => 'MarcaDono'];

	/**
	 * Relação BelongsTo com Model Artigo
	 *
	 * Relaciona-se com o model {@see Artigo Artigo} com uma relação BelongsTo. Obtem o artigo
	 *
	 * @return relation 	Relação BelongsTo
	 */
	public function article()
	{
		return $this->belongsTo(Artigo::class, 'artigo', 'codigo');
	}

	/**
	 * Relação HasMany com Model Web_numserie_ecf
	 *
	 * Relaciona-se com o model {@see Web_numserie_ecf Web_numserie_ecf} com uma relação HasMany. Obtem uma lista das ECF do numero de serie em questão
	 *
	 * @return relation 	Relação HasMany
	 */
	public function ecf()
	{
		return $this->hasMany(Web_numserie_ecf::class, 'chaveAgrup', 'chaveAgrup');
	}

	/**
	 * Relação BelongsToMany com Model Qualcontrol
	 *
	 * Relaciona-se com o model {@see Qualcontrol Qualcontrol} com uma relação BelongsToMany. Obtem todos os controlos de qualidade realizados para o numero de serie em questão
	 *
	 * @return relation 	Relação BelongsToMany
	 */
	public function quality_controls()
	{
		return $this->belongsToMany(Qualcontrol::class, 'nseriequalcontrols', 'nserie', 'linhaid', 'chaveAgrup', 'id');
	}

	/**
	 * Relação HasMany com Model ZxNsgc
	 *
	 * Relaciona-se com o model {@see ZxNsgc ZxNsgc} com uma relação HasMany. Obtem as guias de expedição do numero de serie em questão
	 *
	 * @return relation 	Relação HasMany
	 */
	public function dispatched()
	{
		return $this->hasMany(ZxNsgc::class, 'numSerie', 'chave');
	}

	public function brand()
	{
		return $this->belongsTo(Empresasmarca::class, 'marcaDono', 'marca')->select('marca', 'descricao');
	}

	/**
	 * Relação BelongsTo com Model Empresacvt
	 *
	 * Relaciona-se com o model {@see Empresacvt Empresacvt} com uma relação BelongsTo. Obtem a empresa a que pertence a marca
	 *
	 * @return relation     Relação BelongsTo
	 */
	public function company()
	{
		return $this->belongsTo(Empresascvt::class, 'empresa', 'codigo')->select('codigo', 'descricao');
	}

	public function stkNumserieSectors()
	{
		return $this->hasMany(StkNumSerieResult::class, 'NumSerieAgrup', 'chaveAgrup');
	}

	/**
	 * Prlords
	 *
	 * @return array
	 */
	public function prlord()
	{
		return $this->belongsTo(PrLOrd::class, "chave", "NumSerie");
	}
}
