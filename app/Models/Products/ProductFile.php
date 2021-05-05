<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class que gere os Ficheiros do artigo 
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. 
 */
class ProductFile extends Model
{
	/**
	 * Obtem o tamanho do ficheiro
	 *
	 * Cria na collection final uma key com o tamanho dfo ficheiro
	 * 
	 * @return float
	 */
    public function getSizeAttribute()
    {
    	$disks = ['product_sheet', 'product_assembly', 'product_23d'];
    	if(Storage::disk($disks[$this->type_id - 1])->exists(basename($this->url))):
    		return Storage::disk($disks[$this->type_id - 1])->getSize(basename($this->url));
    	else:
    		return 0;
    	endif;
    }
}
