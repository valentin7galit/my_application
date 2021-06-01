<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;

class ProductsSizeApiController extends Controller
{
    public function index()
    {
        return Size::all();
    }

    public function show($id)
    {
        $sizes = Size::with('products')->findOrFail($id);
        
        return $sizes;
    }
}
