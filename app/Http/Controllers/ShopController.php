<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __invoke()
    {
        $products = Product::filter(request(['q', 'category', 'sub-category']))->paginate(16);

        return view('shop', compact('products'));
    }
}
