@extends('front.app')
@section('title', 'Blog | Nomad Concept Group')
@section('content')
<!-- visual/banner of the page -->
<section class="visual">
    <div class="visual-inner blog-default-banner dark-overlay parallax" data-stellar-background-ratio="0.55" style="background-image: url('<?php echo asset('storage/back/' . $data->image) ?>');">
        <div class="container">
            <div class="visual-text-large text-left visual-center">
                <h1 class="visual-title visual-sub-title">{{$data->title}}</h1>
                <p>{!! $data->description !!}</p>
                <div class="breadcrumb-block">
                </div>
            </div>
        </div>
    </div>
</section>
<!--/visual/banner of the page -->
<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block">
        <div class="container">
        <h3 class="text-center element-heading" style="margin-bottom: 30px !important;">{{$data->title}}</h3>
            <div class="row multiple-row">
               @forelse($blogs as $blog)
                <div class="col-md-6 col-lg-4">
                    <div class="col-wrap">
                        <div class="post-grid reverse-grid reverse-grid">
                            <div class="img-block post-img">
                                <a href="{{route('blog.show', $blog)}}"><img src="{{asset('storage/back/' . $blog->image)}}" alt="images"></a>
                            </div>
                            <div class="post-text-block bg-gray-light">
                                <strong class="content-title mb-0"><a href="{{route('blog.show', $blog)}}"><a href="{{route('blog.show', $blog)}}">{{$blog->title}}</a></strong>
                                <p>{!! Str::limit($blog->description, 100) !!}</p>
                                <div class="post-meta clearfix">
                                    <div class="post-link-holder">
                                        <a href="{{route('blog.show', $blog)}}">View <span class="fa fa-arrow-right"><span
                                                    class="sr-only">&nbsp;</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <h4 class="my-0 mx-auto">No Blogs Added Yet</h4>
                @endforelse
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
