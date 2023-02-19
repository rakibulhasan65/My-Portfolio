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

        Mail::to($request->email)->send();
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        } else {
            return response()->success('Successfully Send Your Mail!');
        }


        $notification = array(
            'message' => 'Successfully Send Your Messages!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
