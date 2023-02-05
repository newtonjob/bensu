<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $featured_products = Product::where('featured_at', '!=', null)->has('images')->with('images')->get();
        $discount_products = Product::where('discount', '!=', 0)->has('images')->with('images')->get();

        return view('home', compact('featured_products', 'discount_products'));
    }
}
