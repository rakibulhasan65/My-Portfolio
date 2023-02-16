<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\About;
use App\Models\Backend\Banner;
use App\Models\Backend\Education;
use App\Models\Backend\Experience;
use Illuminate\Http\Request;
use App\Models\Backend\Profession;
use App\Models\Backend\Services;
use App\Models\Backend\TechnicalSupport;
use App\Models\Backend\Gallery\GalleryCategory;

class WebSiteController extends Controller
{
    public function index()
    {
        $bannerDataShow = Banner::first();
        $skillsDataShow = Profession::first()::where('banner_id', $bannerDataShow->id && 'None')->get();
        $aboutDataShow = About::first();
        $educationDataShow = Education::all();
        $experienceDataShow = Experience::all();
        $serviceDataShow = Services::all();
        $galleryDataShow = GalleryCategory::all();
        $supportDataShow = TechnicalSupport::all();
        return view('frontend.pages.index', compact('bannerDataShow', 'skillsDataShow', 'aboutDataShow', 'educationDataShow', 'experienceDataShow', 'serviceDataShow', 'galleryDataShow', 'supportDataShow'));
    }
}
