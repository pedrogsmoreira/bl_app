<?php

namespace App\Models\Products;

use App\Models\Products\Artigo;
use App\AbstractClasses\SyncModel;

/**
 * Class que gere as sub categorias de artigo
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD armazena as subcategorias do artigo
 */
class Subcatprod extends SyncModel
{
	protected static $class = self::class;
	protected static $syncColumns = ['codigo' => 'Codigo', 'descricao' => 'Descricao', 'categoria' => 'Categoria', 'marca' => 'Marca', 'numSeq' => 'NumSeq', 'last_update' => 'last_update'];

	/**
	 * Relação HasMany com Model Artigo
	 *
	 * Relaciona-se com o model {@see Artigo Artigo} com uma relação HasMany. Obtem a lista de artigos associados á subcategoria em questão
	 * 
	 * @return relation 	Relação HasMany
	 */
    public function articles()
    {
    	return $this->hasMany(Artigo::class, 'subCatProd', 'codigo');
    }
}
