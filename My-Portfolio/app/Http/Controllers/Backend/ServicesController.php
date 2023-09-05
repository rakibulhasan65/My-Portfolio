<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Services;
use Image;
use File;

class ServicesController extends Controller
{

    public function index()
    {
        $servicesDataShow = Services::latest()->paginate(3);
        return view('backend.pages.services', compact('servicesDataShow'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $serviceAdd = new Services;
        $servicesImage = $request->ServicesImage;
        if ($servicesImage) {
            $servicesImage = $request->file('ServicesImage');
            $newFileName = time() . '-' . rand() . '.' . $servicesImage->getClientOriginalExtension();
            $fileLocation = public_path('backend/images/Services/' . $newFileName);
            Image::make($servicesImage)->resize(50, 50)->save($fileLocation);
            $serviceAdd->ServicesImage = $newFileName;
        }
        $serviceAdd->serviceTitle = $request->serviceTitle;
        $serviceAdd->serviceDescription = $request->serviceDescription;
        $serviceAdd->status = $request->status;
        $serviceAdd->save();
        $notification = array(
            'message' => 'Saved This Service Data',
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
        $serviceUpdate = Services::find($id);
        $servicesImage = $request->ServicesImage;
        if ($servicesImage) {
            File::exists('backend/images/Services/' . $serviceUpdate->ServicesImage);
            File::delete('backend/images/Services/' . $serviceUpdate->ServicesImage);
            $servicesImage = $request->file('ServicesImage');
            $newFileName = time() . '-' . rand() . '.' . $servicesImage->getClientOriginalExtension();
            $fileLocation = public_path('backend/images/Services/' . $newFileName);
            Image::make($servicesImage)->resize(500, 500)->save($fileLocation);
            $serviceUpdate->ServicesImage = $newFileName;
        }
        $serviceUpdate->serviceTitle = $request->serviceTitle;
        $serviceUpdate->serviceDescription = $request->serviceDescription;
        $serviceUpdate->status = $request->status;
        $serviceUpdate->update();
        $notification = array(
            'message' => 'Update Service Data',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $servicesDelete = Services::find($id);
        if ($servicesDelete) {
            File::exists('backend/images/Services/' . $servicesDelete->ServicesImage);
            File::delete('backend/images/Services/' . $servicesDelete->ServicesImage);
        }
        $servicesDelete->delete();
        $notification = array(
            'message' => 'Deleted Service Data',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
