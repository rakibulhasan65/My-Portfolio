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
        $contactMailStore  = new ContactMail;
        $contactMailStore->name = $request->name;
        $contactMailStore->email = $request->email;
        $contactMailStore->subject = $request->subject;
        $contactMailStore->message = $request->message;
        $contactMailStore->time = now();
        $contactMailStore->save();

        $name = "Rakibul Hasan";
        Mail::to('rakibulhasan5665@gmail.com')->send(new PortfolioContactMail($name));

        $notification = array(
            'message' => 'Successfully Send Your Messages!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
