<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Skills;
use Illuminate\Http\Request;

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
        $skillsData->title = $request->title;
        $skillsData->skillsType = $request->skillsType;
        $skillsData->percentage = $request->percentage;
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
        $skillsData->title = $request->title;
        $skillsData->percentage = $request->percentage;
        $skillsData->status = $request->status;
        $skillsData->save();
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
