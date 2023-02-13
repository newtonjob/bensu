<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        $featured_products  = Product::where('featured_at', '!=', null)->has('images')->with('images')->get();
        $discount_products  = Product::where('discount', '!=', 0)->has('images')->with('images')->get();
        $new_products       = Product::latest()->take(12)->get();
        $best_sellers       = Product::select('products.id', 'products.name', 'products.slug', 'products.price', 'products.discount',
            DB::raw('count(order_product.product_id) as count'))
            ->join('order_product', 'products.id', '=', 'order_product.product_id')
            ->groupBy('id', 'name', 'slug', 'price', 'discount')
            ->orderByDesc('count')
            ->limit(20)
            ->get();

        return view('home', compact('featured_products', 'discount_products', 'best_sellers', 'new_products'));
    }
}
