@extends('back.app')
@section('title', 'Add Product | Admin - NCG')
@section('heading', 'Add Product')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Add a Product</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to add a Product.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.product.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" required value="{{old('title')}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Category</label>
                                    <div class="col-sm-10">
                                       <select name="product_category_id" class="form-control">
                                       @foreach($categories as $category)
                                          <option value="{{$category->id}}" @if(isset($_GET['product_category_id'])) @if($_GET['product_category_id'] == $category->id) selected @endif @endif>{{$category->title}}</option>
                                       @endforeach
                                       </select>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('product_category_id')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Price</label>
                                    <div class="col-sm-10">
                                        <input name="price" required value="{{old('price')}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('price')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product description</label>
                                    <div class="col-sm-10">
                                       <textarea name="description" id="tiny" cols="30" rows="10">{{old('description')}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('description')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-fileinput">Product Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" required type="file" class="form-control" id="example-fileinput">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('image')}}</span>
                                </div>

                                 <a href="{{route('admin.product.index')}}" class="btn btn-outline-secondary waves-effect">Go Back</a>
                                 <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                                <button type="submit" class="btn btn-outline-success waves-effect float-right width-md waves-light">Add</button>
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
