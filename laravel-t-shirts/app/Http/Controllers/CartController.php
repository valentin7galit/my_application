<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\LotSize;
use App\Models\Size;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::with('sizes', 'lot_sizes')->get();
        $lot_size = LotSize::get();
        $sizes = Size::get();
        
        return view('pages.cart', [
            'products' => $products,
            'lot_size' => $lot_size,
            'sizes' => $sizes
        ]);
    }
}
