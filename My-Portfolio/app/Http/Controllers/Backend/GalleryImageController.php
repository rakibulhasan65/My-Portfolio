<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Gallery;
use File;
use Illuminate\Http\Request;
use Image;

class GalleryImageController extends Controller
{

    public function index()
    {
        $galleryAllData = Gallery::latest()->paginate(3);
        return view('backend.pages.gallery',compact('galleryAllData'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        try {

            // Create a new Gallery instance
            $galleryData = new Gallery;

            $eventsImage1 =$request->hasFile('eventsImage1');
            $eventsImage2 =$request->hasFile('eventsImage2');
            $eventsImage3 =$request->hasFile('eventsImage3');
            $eventsImage4 =$request->hasFile('eventsImage4');

            if ($eventsImage1) {
                $eventsImage1 = 'events' . time() . '-' . rand() . '.' . $eventsImage1->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $eventsImage1);
                Image::make($eventsImage1)->resize(800, 720)->save($location);
                $galleryData->eventsImage1 = $eventsImage1;
            } elseif ($eventsImage2) {
                $eventsImage2 = 'events' . time() . '-' . rand() . '.' . $eventsImage2->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $eventsImage2);
                Image::make($eventsImage2)->resize(800, 720)->save($location);
                $galleryData->eventsImage2 = $eventsImage2;
            } elseif ($eventsImage3) {
                $eventsImage3 = 'events' . time() . '-' . rand() . '.' . $eventsImage3->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $eventsImage3);
                Image::make($eventsImage3)->resize(800, 720)->save($location);
                $galleryData->eventsImage3 = $eventsImage3;
            } elseif ($eventsImage4) {
                $eventsImage4 = 'events' . time() . '-' . rand() . '.' . $eventsImage4->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $eventsImage4);
                Image::make($eventsImage4)->resize(800, 720)->save($location);
                $galleryData->eventsImage4 = $eventsImage4;
            }

            $devImage1 = $request->hasFile('devImage1');
            $devImage2 = $request->hasFile('devImage2');

            if ($devImage1) {
                $devImage1 = 'dev' . time() . '-' . rand() . '.' . $devImage1->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $devImage1);
                Image::make($devImage1)->resize(800, 720)->save($location);
                $galleryData->devImage1 = $devImage1;
            } elseif ($devImage2) {
                $devImage2 = 'dev' . time() . '-' . rand() . '.' . $devImage2->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $devImage2);
                Image::make($devImage2)->resize(800, 720)->save($location);
                $galleryData->devImage2 = $devImage2;
            }


            // Notify the user of success
            $notification = [
                'message' => 'Gallery successfully saved',
                'alert-type' => 'success',
            ];
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            // Handle any exceptions or errors here
            $notification = [
                'message' => 'Error: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->back()->with($notification);
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
        $galleryData = GalleryCategory::find($id);
        $galleryData->category = $request->sub_category;
        $galleryImg = $request->file('galleryImage');
        if ($galleryImg) {
            foreach ($galleryImg as $galleryImg) {
                File::exists('backend/images/Gallery/' . $galleryData->galleryImage);
                File::delete('backend/images/Gallery/' . $galleryData->galleryImage);
                $customImageName = time() . '-' . rand() . '.' . $galleryImg->getClientOriginalExtension();
                $location = public_path('backend/images/Gallery/' . $customImageName);
                Image::make($galleryImg)->resize(400, 300)->save($location);
                $galleryData->galleryImage = $customImageName;
                $galleryData->update();
            }
        }
        $galleryData->status = $request->status;
        $galleryData->update();
        $notification = array(
            'message' => 'Successfully Gallery Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $deleteImage = GalleryCategory::find($id);
        if ($deleteImage) {
            if (File::exists('backend/images/Gallery/' . $deleteImage->galleryImage)) {
                File::delete('backend/images/Gallery/' . $deleteImage->galleryImage);
            }
            $deleteImage->delete();
        }
        $notification = array(
            'message' => 'Successfully Delete This Item!',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
