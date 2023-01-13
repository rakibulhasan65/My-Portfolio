<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Banner;

class BannerController extends Controller
{

    public function index()
    {
        return view('backend/pages/banners');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        // return response()->json($request);
        $bannerData = new Banner();
        $bannerData->bannerImage = $request->bannerImage;
        $bannerData->developerName = $request->developerName;
        $bannerData->skills = $request->skills;
        $bannerData->resume = $request->resume;
        $bannerData->resumeVideo = $request->resumeVideo;
        $bannerData->save();
        if ($request) {
            return response()->json([
                "success" => "success"
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
