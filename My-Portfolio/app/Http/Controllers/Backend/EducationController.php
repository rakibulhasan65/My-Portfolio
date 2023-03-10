<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    public function index()
    {
        $educationDataShow = Education::all();
        return view('backend.pages.education', compact('educationDataShow'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
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
}
