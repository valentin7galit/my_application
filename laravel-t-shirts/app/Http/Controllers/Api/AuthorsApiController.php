<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthorsApiController extends Controller
{
    public function show($id)
    {
        $users = User::with('articles')->findOrFail($id);
        
        return $users;
    }

    public function delete(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return 204;
    }
}
