<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\About;
use App\Models\Backend\Banner;
use App\Models\Backend\client;
use App\Models\Backend\Education;
use App\Models\Backend\Experience;
use Illuminate\Http\Request;
use App\Models\Backend\Profession;
use App\Models\Backend\Services;
use App\Models\Backend\TechnicalSupport;
use App\Models\Backend\Gallery;
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
        // View::share('pageVisitCount', $pageVisitCount);


        // Banner Data Show Of Frontend
        $bannerDataShow = Banner::first();
//        $skillsDataShow = Profession::first()::where('banner_id', $bannerDataShow->id)->get();
        // About Data Show Of Fronted
        $aboutDataShow = About::first();
        // Education Data Show Of Frontend
        $educationDataShow = Education::select('*')
            ->where('status', '=', 1)
            ->get();
        // return response()->json($educationDataShow);
        // Experience Data Show Of Frontend
        $experienceDataShow = Experience::select('*')
            ->where('status', '=', 1)
            ->get();
        // Skills Data Show Of Frontend
        $WebSkills = Skills::select('*')
            ->where('status', '=', 1)
            ->get();
        // Services Data Show Of Frontend
        $serviceDataShow = Services::select('*')
            ->where('status', '=', 1)
            ->get();
        // Gallery Data Show Of Frontend
        $galleryDataShow = Gallery::select('*')
            ->where('status', '=', 1)
            ->get();
        // Support Data Show Of Frontend
        $clientDataShow = client::select('*')
            ->where('status', '=', 1)
            ->get();
        // Admin Profile Data Show Of Frontend
        $adminProfileDataShow = User::first();
        return view('frontend.pages.index', compact(
            'bannerDataShow',
//            'skillsDataShow',
            'aboutDataShow',
            'educationDataShow',
            'experienceDataShow',
            'serviceDataShow',
            'galleryDataShow',
            'clientDataShow',
            'WebSkills',
            'adminProfileDataShow'
        ));
    }
    public function aboutMore($id)
    {
        $aboutMoreDetails = About::find($id);
        return View('frontend.pages.aboutMore', compact('aboutMoreDetails'));
    }

    public function ServicesMore($id)
    {
        $ServicesMoreDetails = Services::find($id);
        return View('frontend.pages.servicesReadMore', compact('ServicesMoreDetails'));
    }
}
