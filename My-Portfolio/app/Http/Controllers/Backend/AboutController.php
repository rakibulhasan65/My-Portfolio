<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\About;
use Image;
use File;
use Illuminate\Support\Arr;

class AboutController extends Controller
{

    public function index()
    {
        $aboutDataShow = About::first();
        return view('backend.pages.about', compact('aboutDataShow'));
    }

    public function create()
    {
        //
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
        $aboutData = About::find($id);
        if ($request->aboutImage) {
            $aboutImage = $request->file('aboutImage');
            $customImageName = time() . '-' . rand() . '.' . $aboutImage->getClientOriginalExtension();
            $location = public_path('backend/images/About/' . $customImageName);
            Image::make($aboutImage)->resize(600, 600)->save($location);
            $aboutData->aboutImage = $customImageName;
        }
        $aboutData->aboutTitle = $request->aboutTitle;
        $aboutData->aboutDescription = $request->aboutDescription;
        $aboutData->name = $request->name;
        $aboutData->degree = $request->degree;
        $aboutData->phone = $request->phone;
        $aboutData->email = $request->email;
        $aboutData->address = $request->address;
        $aboutData->birth = $request->birth;
        $aboutData->experience = $request->experience;
        $aboutData->freelance = $request->freelance;
        $aboutData->status = $request->status;
        $aboutData->update();
        $notification = array(
            'message' => 'Data Successfully Update',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        //
    }
}
