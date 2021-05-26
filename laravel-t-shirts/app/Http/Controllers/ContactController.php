<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Services\ContactMailer;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contactpage');
    }

    private ContactMailer $mailer;

    public function __construct(ContactMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(Request $request)
    {
        $this->mailer->send($request->all());

        return redirect('contact');
    }
}
