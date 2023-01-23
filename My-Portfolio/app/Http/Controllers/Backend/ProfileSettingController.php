<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProfileSetting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class ProfileSettingController extends Controller
{
    function profileIndex()
    {
        $userShow = User::first();
        return view('backend.pages.profileSetting', compact('userShow'));
    }
    function profileUpdate(Request $request)
    {
        $userUpdate = User::first();
        if ($request->userImage) {
            $userImage = $request->file('userImage');
            $customResumeName = time() . '-' . rand() . '.' . $userImage->getClientOriginalExtension();
            $location = public_path('backend/images/Profile/' . $customResumeName);
            Image::make($userImage)->resize(120, 120)->save($location);
            $userUpdate->userImage = $customResumeName;
        }
        $userUpdate->name = $request->name;
        $userUpdate->email = $request->email;
        $userUpdate->password = $request->password;
        $userUpdate->status = $request->status;
        $userUpdate->update();
        return redirect()->back();
        return response()->json($request);

    }

}
