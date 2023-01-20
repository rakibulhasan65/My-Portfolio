<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\WebDesignGallery;
use App\Models\Backend\WebDevGallery;
use Illuminate\Http\Request;
use Image;
use File;

class GalleryController extends Controller
{
    function index()
    {
        $webDevDataShow = WebDevGallery::all();
        return view('backend.pages.gallery', compact('webDevDataShow'));
    }

    function store(Request $request)
    {
        $imageDevelopment = $request->file('webDevelopment');
        if ($imageDevelopment) {
            foreach ($imageDevelopment as $imageDev) {
                $galleyDevSaveData = new WebDevGallery;
                $customImageName = time() . '-' . rand() . '.' . $imageDev->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $customImageName);
                Image::make($imageDev)->resize(400, 300)->save($location);
                $galleyDevSaveData->webDevelopment = $customImageName;
                $galleyDevSaveData->save();
            }
        }
        $imageDesign = $request->file('webDesign');
        if ($imageDesign) {
            foreach ($imageDesign as $imageDesign) {
                $galleyDesignSaveData = new WebDesignGallery;
                $customImageName = time() . '-' . rand() . '.' . $imageDesign->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $customImageName);
                Image::make($imageDesign)->resize(400, 300)->save($location);
                $galleyDesignSaveData->webDesign = $customImageName;
                $galleyDesignSaveData->save();
            }
        }
        return response()->json([
            "status" => "success"
        ]);
    }
}
