<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteSettingController extends Controller
{
    function settingIndex()
    {
        return view('backend.pages.websiteSetting');
    }
}
