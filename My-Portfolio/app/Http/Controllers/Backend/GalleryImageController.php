<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Gallery\Gallery;
use App\Models\Backend\Gallery\GalleryCategory;
use Illuminate\Http\Request;
use File;
use Image;
class GalleryImageController extends Controller
{

    public function index()
    {
        $galleryData = GalleryCategory::paginate(5);
        return view('backend.pages.gallery', compact('galleryData'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $galleryData = new Gallery;
        $galleryData->sub_category = $request->sub_category;
        $galleryImg = $request->file('galleryImage');
        $findGalleryId = Gallery::all()->last();
        if ($galleryImg) {
            foreach ($galleryImg as $galleryImg) {
                $customImageName = time() . '-' . rand() . '.' . $galleryImg->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $customImageName);
                Image::make($galleryImg)->resize(400, 300)->save($location);
                $subCategory = new GalleryCategory;
                $subCategory->category_id = $findGalleryId->id;
                $subCategory->galleryImage = $customImageName;
                $subCategory->galleryCatName = $findGalleryId->sub_category;
                $subCategory->save();
            }
        }
        $galleryData->status = $request->status;
        $galleryData->save();
        $notification = array(
            'message' => 'Successfully Gallery Saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
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
