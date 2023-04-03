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

    function settingUpdate(Request $request, $id)
    {
        $settingDataUpdate = WebsiteSetting::find($id);
        if ($request->siteLogo) {
            File::exists('backend/images/Website/' . $settingDataUpdate->siteLogo);
            File::delete('backend/images/Website/' . $settingDataUpdate->siteLogo);
            $siteLogo = $request->file('siteLogo');
            $customLogoName = time() . '-' . rand() . '.' . $siteLogo->getClientOriginalExtension();
            $location = public_path('backend/images/Website/' . $customLogoName);
            Image::make($siteLogo)->resize(168, 48)->save($location);
            $settingDataUpdate->siteLogo = $customLogoName;
        }
        $settingDataUpdate->websiteTitle = $request->websiteTitle;
        if ($request->favicon) {
            File::exists('backend/images/Website/' . $settingDataUpdate->favicon);
            File::delete('backend/images/Website/' . $settingDataUpdate->favicon);
            $favicon = $request->file('favicon');
            $customFaviconName = time() . '-' . rand() . '.' . $favicon->getClientOriginalExtension();
            $location = public_path('backend/images/Website/' . $customFaviconName);
            Image::make($favicon)->resize(100, 100)->save($location);
            $settingDataUpdate->favicon = $customFaviconName;
        }
        $settingDataUpdate->update();
        $notification = array(
            'message' => 'Successfully Update Setting Data',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
