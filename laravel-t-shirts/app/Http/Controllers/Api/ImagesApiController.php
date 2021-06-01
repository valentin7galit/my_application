<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImagesApiController extends Controller
{
    public function showApi($id)
    {
        $images = Image::with('articles')->findOrFail($id);
        
        return $images;
    }

    public function delete(Request $request, $id)
    {
        $images = Image::findOrFail($id);
        $images->delete();

        return 204;
    }
}
