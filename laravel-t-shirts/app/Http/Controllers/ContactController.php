<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contactpage');
    }

    private Mailer $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(Request $request)
    {
        $this->mailer->send(
            'emails.email',
            ['name' => $request->input('name'), 'content' => $request->input('content'), 'email' => $request->input('email')],
            function (Message $message) use($request)
            {
                $message->to('valentin@t-shirts.com');
                $message->subject($request->input('subject'));
            }
        );

        return redirect('contact');
    }
}
