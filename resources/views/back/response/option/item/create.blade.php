@extends('back.app')
@section('title', 'Add Item | Admin - NCG')
@section('heading', 'Add Item ')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Add an Item to {{$option->option}} </h4>
                <p class="text-muted mb-4 font-14">
                    Fill and submit the following form to add a Item.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{route('admin.optionItem.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2  col-form-label" for="simpleinput">Item</label>
                                    <div class="col-sm-10">
                                        <input name="item" required value="{{old('item')}}" type="text" id="simpleinput" class="form-control" >
                                    </div>
                                    <span class="text-danger ml-2">{{$errors->first('item')}}</span>
                                </div>
                                <input type="hidden" name="option_id" value="{{$option->id}}">
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
