@extends('back.app')
@section('title', 'Edit Product | Admin - NCG')
@section('heading', 'Edit Product')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit a Product</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the Product.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.product.update', $product)}}">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" required value="{{$product->title}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Category</label>
                                    <div class="col-sm-10">
                                       <select name="product_category_id" class="form-control">
                                       @foreach($categories as $category)
                                          <option @if($category->id == $product->product_category_id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                       @endforeach
                                       </select>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('product_category_id')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Price</label>
                                    <div class="col-sm-10">
                                        <input name="price" required value="{{$product->price}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('price')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Description</label>
                                    <div class="col-sm-10">
                                       <textarea name="description" id="tiny" cols="30" rows="10">{{$product->description}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('description')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-fileinput">Product Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" type="file" class="form-control" id="example-fileinput">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('image')}}</span>
                                </div>
                                <a href="{{route('admin.product.index')}}" class="btn btn-outline-secondary waves-effect">Go Back</a>
                                <button type="submit" class="btn btn-outline-success waves-effect float-right width-md waves-light">Save</button>
                            </form>
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
            <!-- end card-box -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection()
