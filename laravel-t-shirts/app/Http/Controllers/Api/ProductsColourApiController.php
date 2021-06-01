<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colour;

class ProductsColourApiController extends Controller
{
    public function index()
    {
        return Colour::all();
    }

    public function show($id)
    {
        $colours = Colour::with('products')->findOrFail($id);
        
        return $colours;
    }
}
