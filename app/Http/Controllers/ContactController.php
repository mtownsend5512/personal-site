<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormEmail;
use Illuminate\Http\Request;
use Mail;
use Zttp\Zttp;

class ContactController extends Controller
{
    public function show(Request $request)
    {
        return view('contact');
    }

    public function send(ContactRequest $request)
    {
        $accessKey = 'b8c6f3f9-83e6-4659-a778-59e82b22ea32';
        $subject = 'Contact form from marktownsend.rocks';

        $response = Zttp::asFormParams()->post('https://api.staticforms.xyz/submit', [
            'accessKey' => $accessKey,
            'name' => $request->name,
            'email' => $request->email,
            'replyTo' => $request->email,
            'message' => $request->message,
            'subject' => $subject
        ]);

        return redirect()->back()->with('message', '<i class="fas fa-paper-plane text-3xl lg:text-lg md:text-lg mb-4 lg:mb-0 mr-4"></i> Thank you! Your message has been sent. I\'ll be in touch.');
    }
}
