<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Info;

class BlogController extends Controller
{
    public function index(){
        $info = Info::all()->first();
        $blogs = Blog::all();
        return view('front.blog.index', compact(['blogs', 'info']));
    }
    public function show(Blog $blog){
        $info = Info::all()->first();
        return view('front.blog.show', compact(['info', 'blog']));
    }
}
