@extends('back.app')
@section('title', 'Add Option | Admin - NCG')
@section('heading', 'Add Option ')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Add an option </h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to add a option.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.option.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Option</label>
                                    <div class="col-sm-10">
                                        <input name="option" required value="{{old('option')}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('option')}}</span>
                                </div>
                                 <a href="{{route('admin.response.index')}}" class="btn btn-outline-secondary waves-effect">Go Back</a>
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
