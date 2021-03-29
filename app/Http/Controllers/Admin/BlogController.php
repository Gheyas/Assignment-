<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\Admin\BlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
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
        $blogs = Blog::all();
        return view('back.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog_data = $request->validated();
        $imagePath = $request->file('image')->store('public/back');
        $image = basename($imagePath);
        $blog_data['image'] = $image;
        Blog::create($blog_data);
        return redirect(route('admin.blog.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('back.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $blog_data = $request->validated();
        if ($request->hasFile('image')){
            $preImage = Blog::find($blog['id'])['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('image')->store('public/back');
            $image = basename($imagePath);
            $blog_data['image'] = $image;
        }
        Blog::where('id', $blog['id'])->update($blog_data);
        return redirect(route('admin.blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $preImage = Blog::find($blog['id'])['image'];
        Storage::delete('public/back/' . $preImage);
        $blog->delete();
        return redirect()->back();
    }
}
