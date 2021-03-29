@extends('back.app')
@section('title', 'Edit Blog Page | Admin - NCG')
@section('heading', 'Edit Blog Page')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit the Blog Page Details</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the Blog Page Details.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.blog.update.index')}}">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Page Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" required value="{{$blog->title}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Page Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" cols="30" rows="5">{{$blog->description}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('description')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-fileinput">Page Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" type="file" class="form-control" id="example-fileinput">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('image')}}</span>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Current Image</label>
                                    <div class="col-sm-10">
                                       <img src="{{asset('storage/back/' . $blog->image )}}" alt="About Image Not Available" style="width: 145px; border-radius:10px;">
                                    </div>
                                </div>
                                <a href="{{route('admin.blog.index')}}" class="btn btn-outline-secondary waves-effect">Go Back</a>
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
