<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories     = Category::all();
        $subCategories  = SubCategory::all();

        return view('categories.index', compact('categories', 'subCategories'));
    }

    public function create()
    {
        $subCategories  = SubCategory::all();

        return view('categories.create', compact('subCategories'));
    }
}
