<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\ContactMail;

class ContactController extends Controller
{
    function index()
    {
        return view('frontend.pages.index');
    }
    function sendMessage(Request $request)
    {
        $contactMailStore  = new ContactMail;
        $contactMailStore->name = $request->name;
        $contactMailStore->email = $request->email;
        $contactMailStore->subject = $request->subject;
        $contactMailStore->message = $request->message;
        $contactMailStore->time = now();
        $contactMailStore->save();
        return redirect()->back();
    }
}
