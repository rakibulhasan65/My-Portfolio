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
use App\Models\Backend\Skills;
use App\Models\Backend\WebsiteSetting;
use App\Models\User;
use Cache;
use Illuminate\Support\Facades\View;


class WebSiteController extends Controller
{
    public function index()
    {
        // Cache::add('frontend.pages.index', 0, now()->addDay());
        // Cache::increment('frontend.pages.index');
        // $pageVisitCount = Cache::get('frontend.pages.index');
        // // return response()->json($pageVisitCount);
        // View::share('pageVisitCount', $pageVisitCount);

        $bannerDataShow = Banner::first();
        $skillsDataShow = Profession::first()::where('banner_id', $bannerDataShow->id)->get();
        $aboutDataShow = About::first();
        $educationDataShow = Education::all();
        $experienceDataShow = Experience::all();
        $WebSkills = Skills::all();
        $serviceDataShow = Services::all();
        $galleryDataShow = GalleryCategory::all();
        $supportDataShow = TechnicalSupport::all();
        $adminProfileDataShow = User::first();
        return view('frontend.pages.index', compact('bannerDataShow', 'skillsDataShow', 'aboutDataShow', 'educationDataShow', 'experienceDataShow', 'serviceDataShow', 'galleryDataShow', 'supportDataShow', 'WebSkills', 'adminProfileDataShow'));
    }
}
