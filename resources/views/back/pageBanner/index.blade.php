@extends('back.app')
@section('title', 'Edit Pages Banner | Admin - NCG')
@section('heading', 'Edit Pages Banner')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Pages' Banner</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the banners of different.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.pageBanner.update')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Product Page Banner</label>
                                    <div class="col-sm-10">
                                       <input type="file" name="product" class="form-control">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('product')}}</span>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Current Product Page Banner</label>
                                    <div class="col-sm-10">
                                       <img src="{{asset('storage/back/' . $banner->product )}}" alt="banner Image Not Available" style="width: 145px; border-radius:10px;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Service Page Banner</label>
                                    <div class="col-sm-10">
                                       <input type="file" name="service" class="form-control">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('service')}}</span>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Current Service Page Banner</label>
                                    <div class="col-sm-10">
                                       <img src="{{asset('storage/back/' . $banner->service )}}" alt="banner Image Not Available" style="width: 145px; border-radius:10px;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Bussiness Page Banner</label>
                                    <div class="col-sm-10">
                                       <input type="file" name="business" class="form-control">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('business')}}</span>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Current Bussiness Page Banner</label>
                                    <div class="col-sm-10">
                                       <img src="{{asset('storage/back/' . $banner->business )}}" alt="banner Image Not Available" style="width: 145px; border-radius:10px;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Team Page Banner</label>
                                    <div class="col-sm-10">
                                       <input type="file" name="about" class="form-control">
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('about')}}</span>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Current Team Page Banner</label>
                                    <div class="col-sm-10">
                                       <img src="{{asset('storage/back/' . $banner->about )}}" alt="banner Image Not Available" style="width: 145px; border-radius:10px;">
                                    </div>
                                </div>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
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
