<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;

/**
 * Class que gere as unidades de medida usadas no artigo
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD armazena as undiades de medida usadas nos artigos 
 */
class Unidade extends SyncModel
{
	protected static $class = self::class;
    protected static $syncColumns = ['codigo' => 'Codigo', 'descricao' => 'Descricao', 'last_update' => 'last_update'];
}
