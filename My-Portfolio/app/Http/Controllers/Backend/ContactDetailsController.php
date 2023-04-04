<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\ContactMail;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
    public function contact()
    {
        $contactAllData = ContactMail::latest()->paginate(5);
        return view('backend.pages.contact', compact('contactAllData'));
    }
    public function contactMail($id)
    {
        $contactMailData = contactMail::find($id);
        return view('backend.pages.contactMail', compact('contactMailData'));
    }
    public function contact_delete($id)
    {
        return response()->json($id);
    }
}
