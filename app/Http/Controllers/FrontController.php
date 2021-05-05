<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Repositories
use App\Repositories\ProductRepository;

class FrontController extends Controller
{
    public function getProduct($code)
    {
        $product = ProductRepository::getProduct($code);

        return view('frontend.product', compact('product'));

    }
}
