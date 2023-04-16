<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\client;
use Illuminate\Http\Request;
use Image;
use File;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientAllDataShow = client::latest()->paginate(3);
        return view('backend.pages.client_review', compact('clientAllDataShow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientStore = new client();
        if ($request->image) {
            $image = $request->file('image');
            $customImageName = time() . '-' . rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/images/Client/' . $customImageName);
            Image::make($image)->resize(80, 80)->save($location);
            $clientStore->image = $customImageName;
        }
        $clientStore->name = $request->name;
        $clientStore->country = $request->country;
        $clientStore->client_review = $request->client_review;
        $clientStore->status = $request->status;
        $clientStore->save();
        $notification = array(
            'message' => 'Successfully Saved Client Data',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientUpdate = client::find($id);
        if (File::exists('backend/images/Support/' . $clientUpdate->image)) {
            File::delete('backend/images/Support/' . $clientUpdate->image);
            if ($request->image) {
                $image = $request->file('image');
                $customImageName = time() . '-' . rand() . '.' . $image->getClientOriginalExtension();
                $location = public_path('backend/images/Client/' . $customImageName);
                Image::make($image)->resize(80, 80)->save($location);
                $clientUpdate->image = $customImageName;
            }
        }
        $clientUpdate->name = $request->name;
        $clientUpdate->country = $request->country;
        $clientUpdate->client_review = $request->client_review;
        $clientUpdate->status = $request->status;
        $clientUpdate->update();
        $notification = array(
            'message' => 'Successfully Update Client Data',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientDelete = Client::find($id);
        if (File::exists('backend/images/Client/' . $clientDelete->image)) {
            File::delete('backend/images/Client/' . $clientDelete->image);
        }
        $clientDelete->delete();
        $notification = array(
            'message' => 'Successfully Delete Client Data',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
