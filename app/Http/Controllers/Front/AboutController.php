<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Info;
use App\Models\Team;
use App\Models\PageBanner;

class AboutController extends Controller
{
    public function show(About $about){
        $abouts = About::all();
        $info = Info::all()->first();
        return view('front.about.show', compact(['about', 'info', 'abouts']));
    }
    public function showTeam(Team $team){
        $abouts = About::all();
        $info = Info::all()->first();
        $members = Team::all();
        $banner = pageBanner::all()->first();
        return view('front.about.team', compact(['abouts', 'info', 'members', 'banner']));
    }
}
