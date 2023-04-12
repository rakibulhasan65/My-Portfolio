<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Banner;
use App\Models\Backend\Profession;
use Image;
use File;

class BannerController extends Controller
{

    public function index()
    {
        $bannerUpdate = Banner::first();
        $skillsDataShow = Profession::where('banner_id', $bannerUpdate->id)->get();
        return view("backend.pages.banners", compact('bannerUpdate', 'skillsDataShow'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $bannerData = Banner::find($id);
        if ($request->image) {
            File::exists('backend/images/Banners/' . $bannerData->image);
            File::Delete('backend/images/Banners/' . $bannerData->image);
            $image = $request->file('image');
            $customImageName = time() . '-' . rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/images/Banners/' . $customImageName);
            Image::make($image)->resize(600, 600)->save($location);
            $bannerData->image = $customImageName;
        }
        $bannerData->name = $request->name;
        if ($request->resume) {
            File::exists('backend/images/Banners/' . $bannerData->resume);
            File::Delete('backend/images/Banners/' . $bannerData->resume);
            $resume = $request->file('resume');
            $customResumeName = time() . '-' . rand() . '.' . $resume->getClientOriginalExtension();
            $location = public_path('backend/images/Banners/');
            $resume->move($location, $customResumeName);
            $bannerData->resume = $customResumeName;
        }
        $bannerData->resumeVideo = $request->resumeVideo;
        // $findLastId = Banner::all()->last();
        $devSkillsCategory = $request->devSkillsCategory;
        if ($devSkillsCategory) {
            $deleteId = Profession::where('banner_id', $bannerData->id);
            $deleteId->delete();
            foreach ($devSkillsCategory as $devSkillsCategory) {
                $devSkills = new Profession;
                $devSkills->banner_id = $bannerData->id;
                $devSkills->devSkillsCategory = $devSkillsCategory;
                $devSkills->save();
            }
        }
        $bannerData->update();
        $notification = array(
            'message' => 'Banner Successfully Updated!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        //
    }
}
