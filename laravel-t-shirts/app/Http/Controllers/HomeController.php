<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $populars = Product::with('product_images')
            ->orderBy('rating', 'desc')
            ->get();

        $recents = Product::with('product_images')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('pages.homepage', [
            'populars' => $populars,
            'recents' => $recents
        ]);
    }
}
