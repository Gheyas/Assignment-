<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Http\Requests\Admin\BusinessRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BusinessController extends Controller
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
        $businesses = Business::where('id', '!=', 1)->get();
        return view('back.business.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessRequest $request)
    {
        $business_data = $request->validated();
        $imagePath = $request->file('image')->store('public/back');
        $image = basename($imagePath);
        $business_data['image'] = $image;
        Business::create($business_data);
        return redirect(route('admin.business.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        return view('back.business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessRequest $request, Business $business)
    {
        $business_data = $request->validated();
        if ($request->hasFile('image')){
            $preImage = Business::find($business['id'])['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('image')->store('public/back');
            $image = basename($imagePath);
            $business_data['image'] = $image;
        }
        Business::where('id', $business['id'])->update($business_data);
        return redirect(route('admin.business.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $preImage = Business::find($business['id'])['image'];
        Storage::delete('public/back/' . $preImage);
        $business->delete();
        return redirect()->back();
    }

    public function editText(){
        $text = Business::where('id', 1)->get()->first();
        return view('back.business.text', compact('text'));
    }
    public function updateText(Request $request){
        $text = $request->title;
        $business['title'] = $text;
        Business::where('id', 1)->update($business);
        return redirect()->back();
    }
}
