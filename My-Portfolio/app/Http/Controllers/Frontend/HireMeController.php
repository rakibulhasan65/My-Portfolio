<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HireMeController extends Controller
{
    public function hireMe()
    {
        return view('frontend.pages.hireMe');
    }

    public function orderPlaceForm()
    {
        return view('frontend.pages.orderPlaceForm');
    }
}
