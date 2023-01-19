<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Services;

class ServicesController extends Controller
{

    public function index()
    {
        $servicesShow = Services::all();
        return view('backend.pages.services', compact('servicesShow'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $serviceAdd = new Services;
        $serviceAdd->serviceIcon = $request->serviceIcon;
        $serviceAdd->serviceTitle = $request->serviceTitle;
        $serviceAdd->serviceDescription = $request->serviceDescription;
        $serviceAdd->status = $request->status;
        $serviceAdd->save();
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
        $serviceUpdate = Services::find($id);
        $serviceUpdate->serviceIcon = $request->serviceIcon;
        $serviceUpdate->serviceTitle = $request->serviceTitle;
        $serviceUpdate->serviceDescription = $request->serviceDescription;
        $serviceUpdate->status = $request->status;
        $serviceUpdate->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $servicesDelete = Services::find($id);
        $servicesDelete->delete();
        return redirect()->back();
    }
}
