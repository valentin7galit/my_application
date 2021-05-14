<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class TestController extends Controller
{
    public function __invoke()
    {
        \Mail::row('test', function ($message)
        {
            $message->to('test@test.ts');
            $message->subject('Testing mailing');
        });
    }
}
