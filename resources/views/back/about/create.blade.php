@extends('back.app')
@section('title', 'Add about page | Admin - NCG')
@section('heading', 'Add about page')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Add an about page</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to add an about page.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.about.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">About Page Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" required value="{{old('title')}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">About Page Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="tiny" cols="30" rows="10">{{old('description')}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('description')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-fileinput">About Page Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" required type="file" class="form-control" id="example-fileinput">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('image')}}</span>
                                </div>

                                 <a href="{{route('admin.about.index')}}" class="btn btn-outline-secondary waves-effect">Go Back</a>
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
