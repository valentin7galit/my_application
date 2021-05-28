<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /* Controller API */

    public function showApi($id)
    {
        $users = User::with('articles')
            ->findOrFail($id);
        
        return $users;
    }
}
