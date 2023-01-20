<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function index()
    {
        return view('backend.pages.gallery');
    }

    function store(Request $request)
    {
    }
}
