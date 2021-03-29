<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\About;
use App\Models\Counter;
use App\Models\Option;
use App\Models\Icon;
use App\Models\Banner;
use App\Models\ProductCategory;
use App\Models\Page;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index(){
        $slider = Slider::all()->first();
        $info = Info::all()->first();
        $counter = Counter::where('id', 1)->get()->first();
        $options = Option::all();
        $icons = Icon::all();
        $banner = Banner::where('id', 1)->get()->first();
        $categories = ProductCategory::all();
        $abouts = About::all();
        return view('front.home.index', compact(['info', 'counter', 'options', 'icons', 'banner', 'categories', 'abouts', 'slider']));
    }

    public function privacy(){
        $page = Page::where('id', 1)->get()->first();
        $info = Info::all()->first();
        return view('front.home.privacy', compact(['info', 'page', 'abouts']));
    }

    public function terms(){
        $page = Page::where('id', 1)->get()->first();
        $info = Info::all()->first();
        return view('front.home.terms', compact(['info', 'page', 'abouts']));
    }
}
