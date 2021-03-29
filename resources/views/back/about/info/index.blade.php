@extends('back.app')
@section('title', 'Edit info | Admin - NCG')
@section('heading', 'Edit Info')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit website info</h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to Edit the basic website info.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.info.update')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Address</label>
                                    <div class="col-sm-10">
                                        <input name="address" required value="{{$info->address}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('address')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Email</label>
                                    <div class="col-sm-10">
                                        <input name="email" required value="{{$info->email}}" type="email" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('email')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">phone</label>
                                    <div class="col-sm-10">
                                        <input name="phone" required value="{{$info->phone}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('phone')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Facebook link</label>
                                    <div class="col-sm-10">
                                        <input name="fb" required value="{{$info->fb}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('fb')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Twitter link</label>
                                    <div class="col-sm-10">
                                        <input name="tw" required value="{{$info->tw}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('tw')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Instagram link</label>
                                    <div class="col-sm-10">
                                        <input name="ig" required value="{{$info->ig}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('ig')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Vision</label>
                                    <div class="col-sm-10">
                                    <textarea name="vision" class="form-control" cols="30" rows="5">{{$info->vision}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('vision')}}</span>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Mission</label>
                                    <div class="col-sm-10">
                                    <textarea name="mission" class="form-control" cols="30" rows="5">{{$info->mission}}</textarea>
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('mission')}}</span>
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
