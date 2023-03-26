<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    public function index()
    {
        $educationDataShow = Education::latest()->paginate(3);
        // $educationDataShow = $educationDataShow::where($educationDataShow->status == 1)->get();
        // return response()->json($educationDataShow);
        return view('backend.pages.education', compact('educationDataShow'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validationData = $request->validate(
            [
                'educationTitle' => 'required|max:20',
            ],
            [
                'educationTitle.required' => 'Please Enter Education Title',
                // 'educationTitle.unique' => 'Please Enter Education Title Unique',
                'educationTitle.max' => 'Please Less then 20 Character',
            ]
        );
        $educationAdd = new Education;
        $educationAdd->educationTitle = $request->educationTitle;
        $educationAdd->instituteName = $request->instituteName;
        $educationAdd->passingYears = $request->passingYears;
        $educationAdd->description = $request->description;
        $educationAdd->status = $request->status;
        $educationAdd->save();
        $notification = array(
            'message' => 'Save Education Data',
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
    }

    public function update(Request $request, $id)
    {
        $educationUpdate = Education::find($id);
        $educationUpdate->educationTitle = $request->educationTitle;
        $educationUpdate->instituteName = $request->instituteName;
        $educationUpdate->passingYears = $request->passingYears;
        $educationUpdate->description = $request->description;
        $educationUpdate->status = $request->status;
        $educationUpdate->update();
        $notification = array(
            'message' => 'Update Education Data',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        $educationDelete = Education::find($id);
        $educationDelete->delete();
        $notification = array(
            'message' => 'Deleted Education Data',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    // public function eduSwitchButton($id)
    // {
    //     $switchButton = Education::find($id);
    //     $checked = request('checked');
    //     if ($checked) {
    //         $switchButton->status = 1;
    //         $switchButton->update();
    //     } else {
    //         $switchButton->status = 0;
    //         $switchButton->update();
    //     }
    //     return response()->json(['message' => '200']);
    // }
}
