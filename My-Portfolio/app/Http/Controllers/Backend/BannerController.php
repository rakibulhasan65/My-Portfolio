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
        return view("backend.pages.banners");
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $bannerData = new Banner();
        if ($request->image) {
            $image = $request->file('image');
            $customImageName = time() . '-' . rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/Banners/' . $customImageName);
            Image::make($image)->resize(600, 600)->save($location);
            $bannerData->image = $request->customImageName;
        }
        $bannerData->name = $request->name;
        if ($request->resume) {
            $resume = $request->file('resume');
            $customResumeName = time() . '-' . rand() . '.' . $resume->getClientOriginalExtension();
            $location = public_path('images/Banners/' . $customResumeName);
            Image::make($resume)->save($location);
            $bannerData->resume = $customResumeName;
        }
        $bannerData->resumeVideo = $request->resumeVideo;
        $bannerData->save();
        $findLastId = Banner::all()->last();
        $devSkillsCategory = $request->devSkillsCategory;
        if ($devSkillsCategory) {
            foreach ($devSkillsCategory as $devSkillsCategory) {
                $devSkills = new Profession;
                $devSkills->banner_id = $findLastId->id;
                $devSkills->devSkillsCategory = $devSkillsCategory;
                $devSkills->save();
            }
        }
        if ($bannerData) {
            return response()->json(["name" => "success",
            ]);
        }
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
