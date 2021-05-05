<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;

/**
 * Class que gere os preços por metro quadrado dos tapetes
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD armazena os preços por metro quadrado dos tapetes
 */
class ZxRugMPrice extends SyncModel
{
	protected static $class = self::class;
    protected static $syncColumns = ['num_seq' => 'NumSeq', 'artigo' => 'Artigo', 'preco1' => 'Preco1', 'preco2' => 'Preco2', 'last_update' => 'last_update'];
}
