<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /* Controller API */

    public function showApi($id)
    {
        $galleries = Gallery::with('articles')
            ->findOrFail($id);
        
        return $galleries;
    }
}
