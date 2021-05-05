<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;

/**
 * Class que gere os volumes em que os artigos sao organizados
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD armazena os volumes em que os artigos são aramazenados
 */
class Volume extends SyncModel
{
	protected static $class = self::class;
    protected static $syncColumns = ['linha' => 'Linha', 'Artigo' => 'Artigo', 'quantidade' => 'Quantidade', 'comprimento' => 'Comprimento', 'largura' => 'Largura', 'espessura' => 'Espessura', 'cubico' => 'Cubico', 'descricao' => 'Descricao', 'referencia' => 'Referencia', 'caixa' => 'Caixa', 'peso' => 'Peso', 'processo' => 'Processo', 'last_update' => 'last_update'];

  	protected $fillable = ['linha', 'Artigo', 'quantidade', 'comprimento', 'largura', 'espessura', 'cubico', 'peso'];
}
