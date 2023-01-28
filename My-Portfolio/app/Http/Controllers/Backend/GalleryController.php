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
        $webDesignDataShow = WebDesignGallery::all();
        return view('backend.pages.gallery', compact('webDevDataShow', 'webDesignDataShow'));
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
        $notification = array(
            'message' => 'Successfully Gallery Image Saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    function devImgDelete($id)
    {
        $devImgDelete = WebDevGallery::find($id);
        if (File::exists('backend/images/Gallery/' . $devImgDelete->webDevelopment)) {
            File::delete('backend/images/Gallery/' . $devImgDelete->webDevelopment);
        }
        $devImgDelete->delete();
        $notification = array(
            'message' => 'Deleted Development Image',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    function designImgDelete($id)
    {
        $designImgDelete = WebDesignGallery::find($id);
        if (File::exists('backend/images/Gallery/' . $designImgDelete->webDesign)) {
            File::delete('backend/images/Gallery/' . $designImgDelete->webDesign);
        }
        $designImgDelete->delete();
        $notification = array(
            'message' => 'Deleted Design Image',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
}
