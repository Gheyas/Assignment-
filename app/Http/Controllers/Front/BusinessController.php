<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\Info;
use App\Models\PageBanner;
use App\Models\About;

class BusinessController extends Controller
{
    public function index(){
        $info = Info::all()->first();
        $businesses = Business::all();
        $abouts = About::all();
        $banner = pageBanner::all()->first();
        return view('front.business.index', compact(['businesses', 'info', 'banner', 'abouts']));
    }

    public function show(Business $business){
        $abouts = About::all();
        $info = Info::all()->first();
        return view('front.business.show', compact(['business', 'info', 'abouts']));
    }
}
