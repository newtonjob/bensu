<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->withSum('stocks', 'quantity')->paginate(40);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
}
