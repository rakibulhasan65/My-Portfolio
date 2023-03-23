<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\TechnicalSupport;
use Illuminate\Http\Request;
use Image;
use File;

class TechnicalSupportController extends Controller
{

    public function index()
    {
        $supportAllDataShow = TechnicalSupport::latest()->paginate(3);
        return view('backend.pages.technicalSupport', compact('supportAllDataShow'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $supportStore = new TechnicalSupport;
        if ($request->image) {
            $image = $request->file('image');
            $customImageName = time() . '-' . rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/images/Support/' . $customImageName);
            Image::make($image)->resize(80, 80)->save($location);
            $supportStore->image = $customImageName;
        }
        $supportStore->name = $request->name;
        $supportStore->profession = $request->profession;
        $supportStore->description = $request->description;
        $supportStore->status = $request->status;
        $supportStore->save();
        $notification = array(
            'message' => 'Successfully Saved Support Data',
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
        $supportUpdate = TechnicalSupport::find($id);
        if (File::exists('backend/images/Support/' . $supportUpdate->image)) {
            File::delete('backend/images/Support/' . $supportUpdate->image);
            if ($request->image) {
                $image = $request->file('image');
                $customImageName = time() . '-' . rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/images/Support/' . $customImageName);
                Image::make($image)->resize(80, 80)->save($location);
                $supportUpdate->image = $customImageName;
            }
        }
        $supportUpdate->name = $request->name;
        $supportUpdate->profession = $request->profession;
        $supportUpdate->description = $request->description;
        $supportUpdate->status = $request->status;
        $supportUpdate->update();
        $notification = array(
            'message' => 'Successfully Update Support Data',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $supportStore = TechnicalSupport::find($id);
        if (File::exists('backend/images/Support/' . $supportStore->image)) {
            File::delete('backend/images/Support/' . $supportStore->image);
        }
        $supportStore->delete();
        $notification = array(
            'message' => 'Successfully Delete Support Data',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
