<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Gallery\Gallery;
use App\Models\Backend\Gallery\GalleryCategory;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Image;

class GalleryImageController extends Controller
{

    public function index()
    {
        $galleryData = GalleryCategory::all();
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
    }

    public function destroy($id)
    {
        $deleteImage = GalleryCategory::find($id);
        if ($deleteImage) {
            if (File::exists('backend/images/Gallery/' . $deleteImage->galleryImage)) {
                File::delete('backend/images/Gallery/' . $deleteImage->galleryImage);
            }

            // $findSubCategoryId = GalleryCategory::find($id);
            // $findSubCategoryId = $findSubCategoryId->category_id;

            $findGalleryIdDelete = Gallery::find($deleteImage->id);
            $findGalleryItem = $findGalleryIdDelete->id;

            $deleteImage->delete();

            if (!($deleteImage->category_id === $findGalleryItem)) {

                // $findGalleryIdDelete->delete();
            }
        }

        // return response()->json($findIdSubCat);
        // return response()->json($findGalleryItem <= $findSubCategoryId);


        $notification = array(
            'message' => 'Successfully Delete This Item!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
