<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\ContactMail;
use App\Mail\PortfolioContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function index()
    {
        return view('frontend.pages.index');
    }
    function sendMessage(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'max:16'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $contactMailStore  = new ContactMail;
        $contactMailStore->name = $name;
        $contactMailStore->email = $email;
        $contactMailStore->subject = $subject;
        $contactMailStore->message = $message;
        $contactMailStore->time = now();
        $contactMailStore->save();

        $mailReceive = 'rakibulhasan392364@gmail.com';
        Mail::to($mailReceive)->send(new PortfolioContactMail($name, $email, $subject, $message));

        $notification = array(
            'message' => 'Successfully Send Your Messages!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
