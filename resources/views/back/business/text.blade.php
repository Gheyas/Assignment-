@extends('back.app')
@section('title', 'Edit Business Page Text | Admin - NCG')
@section('heading', 'Edit Business Page Text')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Business Page Text</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the Business Page Text.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.business.updateText')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Page Text</label>
                                    <div class="col-sm-10">
                                        <textarea name="title" id="tiny">{{$text->title}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <a href="{{route('admin.business.index')}}" class="btn btn-outline-secondary waves-effect">Go Back</a>
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
