<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories     = Category::withCount('products')->get();
        $subCategories  = SubCategory::all();
        $products = Product::with('images')->withSum('stocks', 'quantity')->filter()->paginate(40);

        return view('categories.index', compact('categories', 'subCategories'));
    }

    public function create()
    {
        $subCategories  = SubCategory::all();

        return view('categories.create', compact('subCategories'));
    }
}
