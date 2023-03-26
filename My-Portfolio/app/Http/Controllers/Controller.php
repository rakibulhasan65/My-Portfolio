<?php

namespace App\Http\Controllers;

use App\Models\Backend\WebsiteSetting;
use App\Models\Frontend\ContactMail;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $websiteSettingData = WebsiteSetting::first();
        View::share('websiteSettingData', $websiteSettingData);

        $totalContactData = ContactMail::all();
        view::share('totalContactData', $totalContactData);

        $adminShearData = User::first();
        view::share('adminShearData', $adminShearData);
    }
}
