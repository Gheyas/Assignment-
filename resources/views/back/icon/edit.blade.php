@extends('back.app')
@section('title', 'Edit Item | Admin - NCG')
@section('heading', 'Edit Who we are Item')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Item</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the item.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.icon.update', $icon)}}">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Item Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" required value="{{$icon->title}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Item text</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control" cols="30" rows="2">{{$icon->description}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('subtitle')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-fileinput">Item Icon</label>
                                    <div class="col-sm-10">
                                        <input name="image" type="file" class="form-control" id="example-fileinput">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('image')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Link</label>
                                    <div class="col-sm-10">
                                        <input name="link" required value="{{$icon->link}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('link')}}</span>
                                </div>
                                <a href="{{route('admin.icon.index')}}" class="btn btn-outline-secondary waves-effect">Go Back</a>
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
