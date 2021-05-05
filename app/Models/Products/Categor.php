<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;

/**
 * Class que gere as categorias de Artigo
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. Tabela da BD que armazena as cateroias de artigo. 
 */
class Categor extends SyncModel
{
	protected static $class = self::class;
    protected static $syncColumns = ['codigo' => 'Codigo', 'descontoCliente' => 'DescontoCliente', 'descricao' => 'Descricao', 'obs' => 'Obs', 'saft' => 'SAFT', 'last_update' => 'last_update'];
}
