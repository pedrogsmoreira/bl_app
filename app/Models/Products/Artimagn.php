<?php

namespace App\Models\Products;

use App\AbstractClasses\SyncModel;
use Illuminate\Support\Facades\Storage;

class Artimagn extends SyncModel
{
	protected static $class = self::class;
    protected static $syncColumns = ['image_id' => 'image_id', 'numseq' => 'NumSeq', 'codigo' => 'Codigo', 'imagem' => 'Imagem', 'caminho' => 'Caminho', 'last_update' => 'last_update'];

    /**
     * Junta ao array final returnado pelo model Eloquent ORM os valores referenciados. 
     * @var     array
     */
    protected $appends = ['url', 'size'];
	
	/**
	 * URL da imagem 
	 *
	 * Cria na collection final uma key com o URL para a imagem do artigo
	 * 
	 * @return string
	 */
	public function getUrlAttribute()
	{
		return str_replace('//192.168.108.23/MediaSisServer/Sistema/COVET/Imagens/ArtImag/', '/dashboard/products/images/', str_replace('\\', '/', $this->caminho));
	}

	/**
	 * Tamanho do ficheiro de imagem 
	 *
	 * Cria na collection final uma key com o tamanho do ficheiro de imagem
	 * 
	 * @return float
	 */
	public function getSizeAttribute()
	{
		if(Storage::disk('product_images')->exists(basename($this->url))):
			return Storage::disk('product_images')->getSize(basename($this->url));
		else:
			return 0;
		endif;
		
	}

	/*public function toArray() {
	    $this->makeVisible('url'); // set visibility stuff here
	    return parent::toArray();
	}*/
}
