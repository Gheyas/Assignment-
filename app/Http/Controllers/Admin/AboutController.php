<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Http\Requests\Admin\AboutRequest;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('back.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $about_data = $request->validated();
        $imagePath = $request->file('image')->store('public/back');
        $image = basename($imagePath);
        $about_data['image'] = $image;
        About::create($about_data);
        return redirect(route('admin.about.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('back.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, About $about)
    {
        $about_data = $request->validated();
        if ($request->hasFile('image')){
            $preImage = About::find($about['id'])['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('image')->store('public/back');
            $image = basename($imagePath);
            $about_data['image'] = $image;
        }
        About::where('id', $about['id'])->update($about_data);
        return redirect(route('admin.about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $preImage = About::find($about['id'])['image'];
        Storage::delete('public/back/' . $preImage);
        $about->delete();
        return redirect()->back();
    }
}
