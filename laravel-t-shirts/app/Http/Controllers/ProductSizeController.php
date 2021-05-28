<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class ProductSizeController extends Controller
{
    /* Controller API */

    public function indexApi()
    {
        return Size::all();
    }

    public function showApi($id)
    {
        $sizes = Size::with('products')
            ->findOrFail($id);
        
        return $sizes;
    }
}
