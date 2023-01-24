<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\WebsiteSetting;
use Image;
use File;

class WebsiteSettingController extends Controller
{
    function settingIndex()
    {
        $websiteDataShow = WebsiteSetting::first();
        return view('backend.pages.websiteSetting', compact('websiteDataShow'));
    }

    function settingUpdate(Request $request)
    {
        $id = WebsiteSetting::first();
        $settingDataUpdate = WebsiteSetting::find($id);
        if ($request->siteLogo) {
            $siteLogo = $request->file('siteLogo');
            $customResumeName = time() . '-' . rand() . '.' . $siteLogo->getClientOriginalExtension();
            $location = public_path('backend/images/Logo/' . $customResumeName);
            Image::make($siteLogo)->resize(168, 48)->save($location);
            $settingDataUpdate->siteLogo = $customResumeName;
            if ($request->siteLogo) {
                File::exists('backend/images/Logo/' . $settingDataUpdate->siteLogo);
                File::delete('backend/images/Logo/' . $settingDataUpdate->siteLogo);
            }
        }
        $settingDataUpdate->websiteTitle = $request->websiteTitle;
        $settingDataUpdate->facebook = $request->facebook;
        $settingDataUpdate->twitter = $request->twitter;
        $settingDataUpdate->instagram = $request->instagram;
        $settingDataUpdate->linkedin = $request->linkedin;
        $settingDataUpdate->github = $request->github;
        // return response()->json($settingDataUpdate);
        $settingDataUpdate->update();
        return redirect()->back();
    }
}
