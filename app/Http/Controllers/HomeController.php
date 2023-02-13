<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $discountProducts  = Product::discounted()->has('images')->with('images')->get();
        $newProducts       = Product::latest()->take(12)->get();
        $bestSellers       = Product::withCount('orders')->latest('orders_count')->take(20)->get();

        return view('home', compact('discountProducts', 'bestSellers', 'newProducts'));
    }
}
