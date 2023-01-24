<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Image;
use File;

class AdminProfileController extends Controller
{
    function profileIndex()
    {
        $id = Auth::user()->id;
        $userShow = User::find($id);
        return view('backend.pages.adminProfile', compact('userShow'));
    }
    function profileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $userUpdate = User::find($id);
        if ($request->userImage) {
            File::exists('backend/images/Profile/' . $userUpdate->userImage);
            File::delete('backend/images/Profile/' . $userUpdate->userImage);
            if ($request->userImage) {
                $userImage = $request->file('userImage');
                $customResumeName = time() . '-' . rand() . '.' . $userImage->getClientOriginalExtension();
                $location = public_path('backend/images/Profile/' . $customResumeName);
                Image::make($userImage)->resize(120, 120)->save($location);
                $userUpdate->userImage = $customResumeName;
            }
        }
        $userUpdate->name = $request->name;
        $userUpdate->email = $request->email;
        if ($request->password) {
            if ($request->password == $userUpdate->password) {
                $userUpdate->password = $request->password;
            }
        }
        $userUpdate->status = $request->status;
        $userUpdate->update();
        return redirect()->back();
        // return response()->json($request);
    }
}
