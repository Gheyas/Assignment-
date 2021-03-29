<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Http\Requests\Admin\BannerRequest;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $banner = Banner::all()->first();
        return view('back.banner.index', compact('banner'));
    }
    public function update(BannerRequest $request){
        $banner_data = $request->validated();
        if ($request->hasFile('image')){
            $preImage = Banner::find(1)['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('image')->store('public/back');
            $image = basename($imagePath);
            $banner_data['image'] = $image;
        }
        Banner::where('id', 1)->update($banner_data);
        return redirect()->back();
    }
}
