<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{
    public function __invoke()
    {
        return view('shop');
    }
}
