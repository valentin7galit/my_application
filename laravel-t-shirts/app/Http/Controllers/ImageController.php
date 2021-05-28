<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    /* Controller API */

    public function showApi($id)
    {
        $images = Image::with('articles')
            ->findOrFail($id);
        
        return $images;
    }
}
