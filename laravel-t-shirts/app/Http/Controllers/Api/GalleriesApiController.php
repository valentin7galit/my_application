<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleriesApiController extends Controller
{
    public function showApi($id)
    {
        $galleries = Gallery::with('articles')->findOrFail($id);
        
        return $galleries;
    }

    public function delete(Request $request, $id)
    {
        $galleries = Gallery::findOrFail($id);
        $galleries->delete();

        return 204;
    }
}
