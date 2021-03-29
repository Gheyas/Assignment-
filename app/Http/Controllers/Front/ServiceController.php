<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\PageBanner;
use App\Models\About;
use App\Models\Info;

class ServiceController extends Controller
{
    public function index(){
        $info = Info::all()->first();
        $banner = pageBanner::all()->first();
        $services = Service::all();
        $abouts = About::all();
        return view('front.service.index', compact(['services', 'info', 'banner', 'abouts']));
    }

    public function show(Service $service){
        $banner = pageBanner::all()->first();
        $info = Info::all()->first();
        $abouts = About::all();
        return view('front.service.show', compact(['service', 'info', 'banner', 'abouts']));
    }
}
