<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\InfoRequest;
use App\Models\Info;

class InfoController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $info = Info::where('id', 1)->get()->first();
        return view('back.about.info.index', compact('info'));
    }
    
    public function update(InfoRequest $request){
        $info_data = $request->validated();
        Info::where('id', 1)->update($info_data);
        return redirect()->back();
    }
}
