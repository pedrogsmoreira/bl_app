<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;

/**
 * Class que gere as familias de Produto
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela de BD aramazena as familias de produtos
 */
class Familia extends SyncModel
{
	protected static $class = self::class;
	protected static $syncColumns = ['codigo' => 'Codigo', 'descricao' => 'Descricao', 'descontoCliente' => 'DescontoCliente', 'grupoFamilia' => 'GrupoFamilia', 'nCaracteres' => 'NCaracteres', 'numerador' => 'Numerador', 'prefixo' => 'Prefixo', 'sufixo' => 'Sufixo', 'rubrica' => 'Rubrica', 'descontoComercial' => 'DescontoComercial', 'descontoFinanceiro' => 'DescontoFinanceiro', 'last_update' => 'last_update'];

	/**
     * Relação HasMany com Model Artigo
     *
     * Relaciona-se com o model {@see Artigo Artigo} com uma relação HasMany. Obtem uma lista de produtos da marca em questão
     *
     * @return relation     Relação HasMany
     */
    public function artigos()
    {
      return $this->hasMany(Artigo::class, 'familia', 'codigo');
    }
}
