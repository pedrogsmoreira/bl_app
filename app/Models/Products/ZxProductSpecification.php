<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;
use App\Models\Simulator\ZxAfetaVal;
use App\Models\Simulator\Zx_arvalatrib;
use App\Traits\Simulator\CurrencyManage;

/**
 * Class que gere as especificações do artigo.
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD aramazena os campos que as referencias usam e os seus valores.
 */
class ZxProductSpecification extends SyncModel
{
    use \Awobaz\Compoships\Compoships, CurrencyManage;

	protected $table = 'zx_product_specification';

    protected static $class = self::class;
    protected static $syncColumns = ['numSeq' => 'numSeq', 'Codigo' => 'Codigo', 'Atributo' => 'Atributo', 'Valor' => 'Valor', 'Designacao' => 'Designacao', 'Visivel' => 'Visivel', 'Obrigatorio' => 'Obrigatorio', 'Ordenacao' => 'Ordenacao', 'Tipo' => 'Tipo', 'model' => 'model', 'Igual' => 'Igual', 'Esconde' => 'Esconde', 'Leitura' => 'Leitura', 'Catalogo' => 'Catalogo', 'Tecnico' => 'Tecnico', 'last_update' => 'last_update'];

    /**
     * Relação MorphTo
     *
     * Relaciona-se com o model indicado na coluna model com uma relação MorphTo. Obtem as descricçoes e detalhes do valor assicado ao campo do artigo
     *
     * @return relation     Relação MorphTo
     */
    public function descritable()
    {
        return $this->morphTo(null, 'model', 'Valor', 'codigo');
    }

    /**
     * Relação BelongsTo com Model Zx_arvalatrib
     *
     * Relaciona-se com o model {@see Zx_arvalatrib Zx_arvalatrib} com uma relação BelongsTo. Obtem os upcharges relativos ao campo com o repectivo valor do acabamento
     *
     * @return relation     Relação BelongsTo
     */
    public function increases()
    {
        return $this->belongsTo(Zx_arvalatrib::class, ['Codigo', 'Atributo', 'Valor'], ['artigo', 'campo', 'valor'])->select('artigo', 'campo', 'valor', 'majPercent', $this->currencyInfo('upcharge').' as majValor', 'custom', 'upDiscount');
    }

    /**
     * Relação BelongsTo com Model Zx_arvalatrib
     *
     * Relaciona-se com o model {@see Zx_arvalatrib Zx_arvalatrib} com uma relação BelongsTo. Obtem os upcharges relativos ao campo com o repectivo valor do acabamento
     *
     * @return relation     Relação BelongsTo
     */
    public function increasesAll()
    {
        return $this->belongsTo(Zx_arvalatrib::class, ['Codigo', 'Atributo', 'Valor'], ['artigo', 'campo', 'valor'])->select('artigo', 'campo', 'valor', 'majPercent', 'majValor', 'majValorD', 'custom', 'upDiscount');
    }

    /**
     * Relação HasMany com Model Zx_arvalatrib
     *
     * Relaciona-se com o model {@see Zx_arvalatrib Zx_arvalatrib} com uma relação HasMany. Obtem todas os upcharges de todas as possiblidades para um determinado campo
     *
     * @return relation     Relação HasMany
     */
    public function choices()
    {
        return $this->hasMany(Zx_arvalatrib::class, ['artigo', 'campo'], ['Codigo', 'Atributo'])->select('artigo', 'campo', 'valor', 'majPercent', 'majValor', 'majValorD', 'custom', 'upDiscount');
    }

    /**
     * Relação HasMany com Model ZxAfetaVal
     *
     * Relaciona-se com o model {@see ZxAfetaVal ZxAfetaVal} com uma relação HasMany. Obtem as limitações de valores a escolher conforme a escolha de valor por campo
     *
     * @return relation     Relação HasMany
     */
    public function afects()
    {
        return $this->hasMany(ZxAfetaVal::class, ['artigo', 'campoOrigem'], ['Codigo', 'Atributo'])->select('artigo', 'campoOrigem', 'valorEscolhido', 'campo', 'valor');
    }
}
