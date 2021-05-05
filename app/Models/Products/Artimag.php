<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;

/**
 * Class que gere as imagens principais do artigo
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. Tabela da BD que aramazena os paths das imagens principais dos artigos
 */
class Artimag extends SyncModel
{
	protected static $class = self::class;
    protected static $syncColumns = ['codigo' => 'Codigo', 'imagem' => 'Imagem', 'caminho' => 'Caminho', 'last_update' => 'last_update'];

    /**
     * Junta ao array final returnado pelo model Eloquent ORM os valores referenciados. 
     * @var     array
     */
    protected $appends = ['url'];
	
	/**
	 * URL da imagem 
	 *
	 * Cria na collection final uma key com o URL para a imagem principal do artigo
	 * 
	 * @return string
	 */
	public function getUrlAttribute()
	{
		return str_replace('//192.168.108.23/MediaSisServer/Sistema/COVET/Imagens/ArtImag/', '/dashboard/products/images/', str_replace('\\', '/', $this->caminho));
	}
	
	/*public function toArray() {
	    $this->makeVisible('url'); // set visibility stuff here
	    return parent::toArray();
	}*/
}
