<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\About;
use App\Models\Product;
use App\Models\Info;
use App\Models\PageBanner;

class ProductController extends Controller
{
    public function index(){
        $info = Info::all()->first();
        $categories = ProductCategory::all();
        $abouts = About::all();
        $products = Product::all();
        $banner = pageBanner::all()->first();
        return view('front.product.index', compact(['info', 'products', 'categories', 'abouts', 'banner']));
    }

    public function show(Product $product){
        $info = Info::all()->first();
        $others = Product::where('id', '!=', $product->id)->get()->take(8);
        $categories = ProductCategory::all();
        $abouts = About::all();
        $banner = pageBanner::all()->first();
        return view('front.product.show', compact(['info', 'product', 'others', 'categories', 'abouts', 'banner']));
    }
}
