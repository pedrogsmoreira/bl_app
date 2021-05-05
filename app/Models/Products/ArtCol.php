<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;
use App\Models\Materials\Fabrics\Coleccao;

/**
 * Class que gere a relação entre artigos e coleçoes 
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD armazena a relação entre os artigos e as colecções  
 */
class ArtCol extends SyncModel
{
    protected static $class = self::class;
    protected static $syncColumns = ['numseq' => 'numseq', 'artigo' => 'artigo', 'coleccao' => 'coleccao', 'last_update' => 'last_update'];

    /**
     * Relação BelongsTo com Model Coleccao
     *
     * Relaciona-se com o model {@see Coleccao Coleccao} com uma relação BelongsTo. Obtem a Colecção que se associa ao artigo
     * 
     * @return relation 	Relação BelongsTo
     */
    public function collection(){
          return $this->belongsTo(Coleccao::class, 'coleccao', 'codigo');
    }
}
