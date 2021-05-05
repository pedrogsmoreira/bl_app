<?php

namespace App\Models\Products;

use App\Models\Products\Artigo;
use App\AbstractClasses\SyncModel;
use App\Models\Fornecedors\Forneced;

/**
 * Class que gere a relação de artigos com fornecedores
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD aramazena a relação dos artigos com os fornecedores
 */
class Artforn extends SyncModel
{
    protected static $class = self::class;
    protected static $syncColumns = ['acab01' => 'Acab01', 'acab02' => 'Acab02', 'acab03' => 'Acab03', 'acab04' => 'Acab04', 'acab05' => 'Acab05', 'acab06' => 'Acab06', 'acab07' => 'Acab07', 'acab08' => 'Acab08', 'acab09' => 'Acab09', 'acab10' => 'Acab10', 'acab11' => 'Acab11', 'acab12' => 'Acab12', 'acab13' => 'Acab13', 'acab14' => 'Acab14', 'acab15' => 'Acab15', 'acab16' => 'Acab16', 'acab17' => 'Acab17', 'acab18' => 'Acab18', 'acab19' => 'Acab19', 'acab20' => 'Acab20', 'acab21' => 'Acab21', 'acab22' => 'Acab22', 'acab23' => 'Acab23', 'acab24' => 'Acab24', 'acab25' => 'Acab25', 'acabamento' => 'Acabamento', 'altura' => 'Altura', 'alturaAssento' => 'AlturaAssento', 'alturaBracos' => 'AlturaBracos', 'artigo' => 'Artigo', 'artigoFornecedor' => 'ArtigoFornecedor', 'cablagem' => 'Cablagem', 'certificado' => 'Certificado', 'coleccao' => 'Coleccao', 'compCorte' => 'CompCorte', 'componentes' => 'Componentes', 'comprimento' => 'Comprimento', 'data' => 'Data', 'dataHoraMOV' => 'DataHoraMOV', 'desconto' => 'Desconto', 'descontoComercial' => 'DescontoComercial', 'descontoPercentual' => 'DescontoPercentual', 'descontoQuantidade' => 'DescontoQuantidade', 'descricao' => 'Descricao', 'diametro' => 'Diametro', 'diametro2' => 'Diametro2', 'dimmer' => 'Dimmer', 'espeCorte' => 'EspeCorte', 'especificidade' => 'Especificidade', 'espessura' => 'Espessura', 'extras' => 'Extras', 'fireR' => 'FireR', 'fornecedor' => 'Fornecedor', 'inter' => 'Inter', 'lampada' => 'Lampada', 'largCorte' => 'LargCorte', 'largura' => 'Largura', 'larguraAssento' => 'LarguraAssento', 'linha' => 'Linha', 'materiaPrima' => 'MateriaPrima', 'modelo' => 'Modelo', 'nome' => 'Nome', 'numSeq' => 'NumSeq', 'obs' => 'Obs', 'operadorMOV' => 'OperadorMOV', 'planoAmostragem' => 'PlanoAmostragem', 'prazoMedioEntrega' => 'PrazoMedioEntrega', 'preco' => 'Preco', 'precoLiquido' => 'PrecoLiquido', 'precoMedio' => 'PrecoMedio', 'principal' => 'Principal', 'prioridade' => 'Prioridade', 'profundAssento' => 'ProfundAssento', 'profundidade' => 'Profundidade', 'qtd01' => 'Qtd01', 'quantidadeComprada' => 'QuantidadeComprada', 'quantidadeDesconto' => 'QuantidadeDesconto', 'ral' => 'RAL', 'selecao' => 'Selecao', 'tipoCompra' => 'TipoCompra', 'tipoEmbal' => 'TipoEmbal', 'unidade' => 'Unidade', 'versao' => 'Versao', 'last_update' => 'last_update'];

    /**
     * Relação BelongsTo com Model Artigo
     *
     * Relaciona-se com o model {@see Artigo Artigo} com uma relação BelongsTo. Obtem o Artigo referenrte a relacao 
     * 
     * @return relation     Relação BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Artigo::class, 'artigo', 'codigo');
    }

    /**
     * Relação BelongsTo com Model Forneced
     *
     * Relaciona-se com o model {@see Forneced Forneced} com uma relação BelongsTo. Obtem o Fornecedor referente a relação
     * 
     * @return relation     Relação BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo(Forneced::class, 'fornecedor', 'codigo');
    }

    /**
     * Relação BelongsTo com Model Forneced (short version)
     *
     * Relaciona-se com o model {@see Forneced Forneced} com uma relação BelongsTo. Obtem o Fornecedor referente a relação
     * 
     * @return relation     Relação BelongsTo
     */
    public function shortSupplier()
    {
        return $this->supplier()->select('codigo', 'nome', 'denominacaoComercial', 'contribuinte', 'pais_iso', 'mercado', 'desconto', 'paginaWeb');
    }
}
