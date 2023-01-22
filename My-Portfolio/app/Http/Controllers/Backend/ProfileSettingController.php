<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProfileSetting;
use Illuminate\Support\Facades\Auth;

class ProfileSettingController extends Controller
{
    function profileIndex()
    {
        return view('backend.pages.profileSetting');
    }
    function profileStore(Request $request)
    {
    }

}
