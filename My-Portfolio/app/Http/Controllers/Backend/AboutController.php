<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\About;

class AboutController extends Controller
{

    public function index()
    {
        return view('backend.pages.about');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // return response()->json($request);
        $aboutData = new About;
        if ($request->aboutImage) {
            $aboutImage = $request->file('aboutImage');
            $customImageName = time() . '-' . rand() . '.' . $aboutImage->getClientOriginalExtension();
            $location = public_path('images/Banners/' . $customImageName);
            Image::make($aboutImage)->resize(600, 600)->save($location);
            $aboutData->image = $request->customImageName;
        }
        $aboutData->aboutTitle = $request->aboutTitle;
        $aboutData->aboutDescription = $request->aboutDescription;
        $aboutData->name = $request->name;
        $aboutData->degree = $request->degree;
        $aboutData->phone = $request->phone;
        $aboutData->address = $request->address;
        $aboutData->birth = $
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
