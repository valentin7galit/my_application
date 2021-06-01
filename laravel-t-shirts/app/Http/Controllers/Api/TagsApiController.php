<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagsApiController extends Controller
{
    public function showApi($id)
    {
        $tags = Tag::with('articles')->findOrFail($id);
        
        return $tags;
    }

    public function delete(Request $request, $id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();

        return 204;
    }
}
