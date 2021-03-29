<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\Admin\SliderRequest;

class SliderController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $slider = Slider::all()->first();
        return view('back.slider.index', compact('slider'));
    }
    public function update(SliderRequest $request){
        $slider_data = $request->validated();
        Slider::where('id', 1)->update($slider_data);
        return redirect()->back();
    }
}
