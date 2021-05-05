<?php

namespace App\Models\Products;

use App\Models\Products\Artigo;
use App\AbstractClasses\SyncModel;

/**
 * Class que gere as categorias de artigo
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD que aramazena os dados das categorias de artigo
 */
class Catprod extends SyncModel
{
	protected static $class = self::class;
	protected static $syncColumns = ['codigo' => 'Codigo', 'descricao' => 'Descricao', 'last_update' => 'last_update'];

	/**
	 * Relação HasMany com Model Artigo
	 *
	 * Relaciona-se com o model {@see Artigo Artigo} com uma relação HasMany. Obtem uma lista de artigos 
	 * 
	 * @return relation 	Relação HasMany
	 */
    public function artigos()
    {
    	return $this->hasMany(Artigo::class, 'catProd', 'codigo');
    }
}
