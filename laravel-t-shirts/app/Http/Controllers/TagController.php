<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function show($id)
    {
        $tags = Tag::with('articles')
            ->findOrFail($id);
        
        return view('pages.tag', [
            'tags' => $tags
        ]);
    }
}
