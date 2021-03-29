@extends('back.app')
@section('title', 'Edit Home Banner | Admin - NCG')
@section('heading', 'Edit Home Banner')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Home Banner</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the HomePage Banner.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.banner.update')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Title</label>
                                    <div class="col-sm-10">
                                        <input name="text" required value="{{$banner->text}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('text')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Image</label>
                                    <div class="col-sm-10">
                                       <input type="file" name="image" class="form-control">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('image')}}</span>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Current Image</label>
                                    <div class="col-sm-10">
                                       <img src="{{asset('storage/back/' . $banner->image )}}" alt="banner Image Not Available" style="width: 145px; border-radius:10px;">
                                    </div>
                                </div>
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
