@extends('back.app')
@section('title', 'Edit Home Slider | Admin - NCG')
@section('heading', 'Edit Home Slider Text')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Home Slider Text</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the HomePage Slider Text.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.slider.update')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" required value="{{$slider->title}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Text</label>
                                    <div class="col-sm-10">
                                        <input name="subtitle" required value="{{$slider->subtitle}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('subtitle')}}</span>
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
