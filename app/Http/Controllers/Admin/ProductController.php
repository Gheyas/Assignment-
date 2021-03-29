<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Requests\Admin\ProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
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
        $products = Product::where('id', '!=', 1)->get();
        return view('back.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('back.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product_data = $request->validated();
        $imagePath = $request->file('image')->store('public/back');
        $image = basename($imagePath);
        $product_data['image'] = $image;
        Product::create($product_data);
        return redirect(session('url'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = ProductCategory::all();
        return view('back.product.edit', compact(['categories', 'product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product_data = $request->validated();
        if ($request->hasFile('image')){
            $preImage = Product::find($product['id'])['image'];
            Storage::delete('public/back/' . $preImage);
            $imagePath = $request->file('image')->store('public/back');
            $image = basename($imagePath);
            $product_data['image'] = $image;
        }
        Product::where('id', $product['id'])->update($product_data);
        return redirect(session('url'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $preImage = Product::find($product['id'])['image'];
        Storage::delete('public/back/' . $preImage);
        $product->delete();
        return redirect()->back();
    }
}
