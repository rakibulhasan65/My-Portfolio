<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experienceShowData = Experience::all();
        return view('backend.pages.experience', compact('experienceShowData'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $experienceAdd = new Experience;
        $experienceAdd->experienceTitle = $request->experienceTitle;
        $experienceAdd->companyName = $request->companyName;
        $experienceAdd->years = $request->years;
        $experienceAdd->description = $request->description;
        $experienceAdd->status = $request->status;
        $experienceAdd->save();
        return redirect()->back();
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
        $experienceUpdate = Experience::find($id);
        $experienceUpdate->experienceTitle = $request->experienceTitle;
        $experienceUpdate->companyName = $request->companyName;
        $experienceUpdate->years = $request->years;
        $experienceUpdate->description = $request->description;
        $experienceUpdate->status = $request->status;
        $experienceUpdate->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $deleteExp = Experience::find($id);
        $deleteExp->delete();
        return redirect()->back();
    }
}