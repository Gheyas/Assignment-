<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageBanner;
use App\Http\Requests\Admin\PagebannerRequest;
use Illuminate\Support\Facades\Storage;

class PageBannerController extends Controller
{
    public function index(){
        $banner = PageBanner::first()->get()->first();
        return view('back.pageBanner.index', compact('banner'));
    }
    public function update(PageBannerRequest $request){
        $banner_data = $request->validated();
        if ($request->hasFile('product')){
            $preImage = PageBanner::find(1)['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('product')->store('public/back');
            $image = basename($imagePath);
            $banner_data['product'] = $image;
        }
        if ($request->hasFile('service')){
            $preImage = PageBanner::find(1)['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('service')->store('public/back');
            $image = basename($imagePath);
            $banner_data['service'] = $image;
        }
        if ($request->hasFile('business')){
            $preImage = PageBanner::find(1)['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('business')->store('public/back');
            $image = basename($imagePath);
            $banner_data['business'] = $image;
        }
        if ($request->hasFile('about')){
            $preImage = PageBanner::find(1)['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('about')->store('public/back');
            $image = basename($imagePath);
            $banner_data['about'] = $image;
        }
        PageBanner::where('id', 1)->update($banner_data);
        return redirect()->back();
    }
}
