<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormEmail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        return view('contact');
    }

    public function send(ContactRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'body' => strip_tags($request->input('message')),
            'reply_to' => trim($request->input('email'))
        ];

        Mail::to(env('PERSONAL_EMAIL_ADDRESS'))->send(new ContactFormEmail($data));

        return redirect()->back()->with('message', '<i class="fas fa-paper-plane text-3xl lg:text-lg md:text-lg mb-4 lg:mb-0 mr-4"></i> Thank you! Your message has been received. I\'ll be in touch.');
    }
}
