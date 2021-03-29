<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CounterRequest;
use App\Models\Counter;
use Illuminate\Support\Facades\Storage;

class CounterController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $counter = Counter::all()->first();
        return view('back.counter.index', compact('counter'));
    }

    public function update(CounterRequest $request){
        $counter_data = $request->validated();
        if ($request->hasFile('image')){
            $preImage = Counter::find(1)['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('image')->store('public/back');
            $image = basename($imagePath);
            $counter_data['image'] = $image;
        }
        Counter::where('id', 1)->update($counter_data);
        return redirect()->back();
    }
}
