<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Skills;
use File;
use Illuminate\Http\Request;
use Image;

class SkillsController extends Controller
{

    public function index()
    {
        $skillsDataShow = Skills::latest()->paginate(3);
        return view('backend.pages.skills', compact('skillsDataShow'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $skillsData = new Skills;
        $skillImage = $request->file('skillImage');
        if ($skillImage) {
            $customName = time() . '-' . rand() . '.' . $skillImage->getClientOriginalExtension();
            $location = public_path('backend/images/Skills/' . $customName);
            // Use the Intervention Image library to resize and save the image
            Image::make($skillImage) // Pass the file instance here
            ->resize(400, 400)
                ->save($location);
            $skillsData->skillImage = $customName;
        }
        $skillsData->skillsType = $request->skillsType;
        $skillsData->status = $request->status;
        $skillsData->save();
        $notification = array(
            'message' => 'Successfully Save Your Data',
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
        $skillsData = Skills::find($id);
        $skillImage = $request->file('skillImage');
        if ($skillImage) {
            $customName = time() . '-' . rand() . '.' . $skillImage->getClientOriginalExtension();
            $location = public_path('backend/images/Skills/' . $customName);
            Image::make($customName)->resize(400, 400)->save($location);
            $skillsData->skillImage = $customName;
        }
        $skillsData->skillsType = $request->skillsType;
        $skillsData->status = $request->status;
        $skillsData->update();
        $notification = array(
            'message' => 'Successfully Update Your Data',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $skillsDelete = Skills::find($id);
        $skillsDelete->delete();
        $notification = array(
            'message' => 'Successfully Delete Your Data',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
