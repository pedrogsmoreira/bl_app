<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

/**
 * Class que gere as alterações feitas na edição de artigo
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD aramazena os dados que foram alterados numa edicao de produto. Isto ajuda o GPAC a identificar que scripts deve correr para actualizar os artigos
 */
class ChangeProduct extends Model
{
    protected $fillable = ['artigo', 'user_id', 'name', 'fotos', 'volumes', 'graus', 'precom2', 'concluido', 'created_at', 'preco'];
}
