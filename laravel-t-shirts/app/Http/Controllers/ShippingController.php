<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Contracts\Mail\Mailer;

class ShippingController extends Controller
{
    public function index()
    {
        return view('pages.shipping');
    }

    private Mailer $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __invoke(Request $request)
    {
        $this->mailer->send(
            'emails.emailshipping', [
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'postal' => $request->input('postal'),
                'city' => $request->input('city'),
            ],
            function (Message $message) use($request)
            {
                $message->to('t-shirts@info.com');
                $message->subject('Shipping');
            }
        );

        return redirect('cart/shipping/success');
    }
}
