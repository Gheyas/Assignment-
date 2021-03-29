<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LogoRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Logo;

class LogoController extends Controller
{
    public function index(){
        $logos = Logo::all();
        return view('back.logo.index', compact('logos'));
    }
    public function uploadImage(LogoRequest $request){
        $imagePath = $request->file('file')->store('public/back');
        $image = basename($imagePath);
        Logo::create(['image' => $image]);
    }

    public function deleteImage($image)
    {
        $toDelete = Logo::find($image);
        $preImage = $toDelete['image'];
        Storage::delete('public/back/' . $preImage);
        $toDelete->delete();
        return redirect()->back();
    }
}
