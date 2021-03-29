@extends('back.app')
@section('title', 'Edit Business | Admin - NCG')
@section('heading', 'Edit Business')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit a Business</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the Business.
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.business.update', $business)}}">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Business Title</label>
                                    <div class="col-sm-10">
                                        <input name="title" required value="{{$business->title}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('title')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Relation to NCG</label>
                                    <div class="col-sm-10">
                                        <select name="relation" class="form-control">
                                            <option value="Clients" @if($business->relation == 'Clients') selected @endif>Clients</option>
                                            <option value="Group" @if($business->relation == 'Group') selected @endif>Group</option>
                                            <option value="Partners" @if($business->relation == 'Partners') selected @endif>Partners</option>
                                        </select>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('relation')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="example-fileinput">Business Image</label>
                                    <div class="col-sm-10">
                                        <input name="image" type="file" class="form-control" id="example-fileinput">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('image')}}</span>
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
