<?php

namespace App\Repositories;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Models\Products\Artigo;

use Validator;

class ProductRepository
{
	public static function getProduct($code)
	{
        $product = Artigo::where('inactivo', '0')
        ->where('codigo', $code)
        ->first();

		return $product;
	}

}
