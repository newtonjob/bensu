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

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        $subCategories  = SubCategory::all();

        return view('categories.create', compact('subCategories'));
    }
}
