<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke()
    {
        $products = Product::paginate(16);
        

        return view('shop', compact('products'));
    }
}
