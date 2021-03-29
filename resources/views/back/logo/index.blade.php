@extends('back.app')
@section('title', 'Add Logos')
@section('heading', 'Add Logos')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Add Logos To Homepage</h4>
            <p class="text-muted mb-4 font-14">
                Drag and drop your logos to the box or click to select Logos to add them to the Homepage.
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="p-2">
                        <form action="{{route('admin.logo.uploadImage')}}" class="dropzone" method="post"
                            enctype="multipart/form-data">
                            @csrf
                        </form>
                    </div>
                </div>
            </div><!-- end row -->
            <p class="text-muted ml-2 font-14">
                Click on each logo, to remove it from Homepage.
            </p>
            <div class="row">
                @forelse($logos as $image)
                <div class="col-md-4 col-xl-3 col-lg-3 natural personal">
                    <div class="gal-detail thumb">
                            <img src="{{asset('storage/back/' . $image->image)}}" class="thumb-img img-fluid"
                                alt="work-thumbnail" style="width: 100%; border-radius: 20px;">
                        <a href="{{route('admin.logo.deleteImage', $image->id)}}" onclick="return confirm('Are you sure you want to delete this image?');" class="btn btn-danger btn-block mt-3" style="width: 90%; margin: 0 auto;">delete</a>
                    </div>
                </div>
                @empty
                <p class="text-muted ml-3 font-14">No Logos uploaded yet. drag and drop them in the box above and
                    refresh the page</p>
                @endforelse

            </div>
        </div>
        <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection
