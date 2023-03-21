<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\ContactMail;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
    public function contact()
    {
        $contactAllData = ContactMail::latest()->paginate(6);
        return view('backend.pages.contact', compact('contactAllData'));
    }
}
