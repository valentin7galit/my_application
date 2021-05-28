<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colour;

class ProductColourController extends Controller
{
    /* Controller API */

    public function indexApi()
    {
        return Colour::all();
    }

    public function showApi($id)
    {
        $colours = Colour::with('products')
            ->findOrFail($id);
        
        return $colours;
    }
}
