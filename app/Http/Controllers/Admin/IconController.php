<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Icon;
use App\Http\Requests\Admin\IconRequest;
use Illuminate\Support\Facades\Storage;

class IconController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = Icon::all();
        return view('back.icon.index', compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.icon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IconRequest $request)
    {
        $icon_data = $request->validated();
        $imagePath = $request->file('image')->store('public/back');
        $image = basename($imagePath);
        $icon_data['image'] = $image;
        Icon::create($icon_data);
        return redirect(route('admin.icon.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function edit(Icon $icon)
    {
        return view('back.icon.edit', compact('icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function update(IconRequest $request, Icon $icon)
    {
        $icon_data = $request->validated();
        if ($request->hasFile('image')){
            $preImage = Icon::find($icon['id'])['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('image')->store('public/back');
            $image = basename($imagePath);
            $icon_data['image'] = $image;
        }
        Icon::where('id', $icon['id'])->update($icon_data);
        return redirect(route('admin.icon.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Icon  $icon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icon $icon)
    {
        $preImage = Icon::find($icon['id'])['image'];
        Storage::delete('public/back/' . $preImage);
        $icon->delete();
        return redirect()->back();
    }
}
