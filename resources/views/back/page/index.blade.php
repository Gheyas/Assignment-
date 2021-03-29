@extends('back.app')
@section('title', 'Edit Pages | Admin - NCG')
@section('heading', 'Edit Pages')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit website Pages</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the Privacy Policy adn Terms of Service pages.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.page.update')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Privacy Policy</label>
                                    <div class="col-sm-10">
                                    <textarea name="privacy" class="tiny" cols="30" rows="5">{{$page->privacy}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('privay')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Terms Of Service</label>
                                    <div class="col-sm-10">
                                    <textarea name="terms" class="tiny" cols="30" rows="5">{{$page->terms}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('terms')}}</span>
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
