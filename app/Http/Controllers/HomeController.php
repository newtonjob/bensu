<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $discountedProducts = Product::discounted()->withWhereHas('images')->get();
        $newProducts        = Product::latest()->take(12)->get();
        $bestSellers        = Product::withCount('orders')->latest('orders_count')->take(20)->get();
        $televisionSubCategory  = SubCategory::with(['products', 'brands'])->find(3);
        // dd($televisionSubCategory->products);
        

        return view('home', compact('discountedProducts', 'bestSellers', 'newProducts', 'televisionSubCategory'));
    }
}
