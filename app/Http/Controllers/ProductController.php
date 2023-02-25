<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\SubCategory;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->withSum('stocks', 'quantity')->paginate(40);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $subCategories  = SubCategory::all();
        $brands         = Brand::all();

        return view('products.create', compact('subCategories', 'brands'));
    }
}
