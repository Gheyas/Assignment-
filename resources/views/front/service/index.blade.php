@extends('front.app')
@section('title', 'Services | Nomad Concept Group')
@section('content')
<!-- visual/banner of the page -->
<section class="visual">
    <div class="visual-inner blog-default-banner dark-overlay parallax" data-stellar-background-ratio="0.55" style="background-image: url('<?php echo asset('storage/back/' . $banner->service) ?>'); height: 300px;min-height:300px !important; padding: 0px;" >
        <div class="container">
            <div class="visual-text-large text-center visual-center">
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"> Home </a></li>
                        <li class="breadcrumb-item"><a href="{{route('service.index')}}"> Services </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/visual/banner of the page -->
<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block py-5">
        <div class="container">
        <h2 class="text-center" style="margin-bottom: 30px !important;">Services</h2>
            <div class="row multiple-row">
               @forelse($services as $service)
                <div class="col-md-6">
                    <div class="col-wrap">
                        <div class="post-grid reverse-grid reverse-grid">
                            <div class="img-block post-img">
                                <a href="{{route('service.show', $service)}}"><img src="{{asset('storage/back/' . $service->image)}}" alt="images"></a>
                            </div>
                            <div class="post-text-block bg-gray-light">
                                <strong class="content-title mb-0"><a href="{{route('service.show', $service)}}"><a href="{{route('service.show', $service)}}">{{$service->title}}</a></strong>
                                <p>{!! Str::limit($service->description, 100) !!}</p>
                                <div class="post-meta clearfix">
                                    <div class="post-link-holder">
                                        <a href="{{route('service.show', $service)}}">View <span class="fa fa-arrow-right"><span
                                                    class="sr-only">&nbsp;</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <h4 class="my-0 mx-auto">No Services Added Yet</h4>
                @endforelse
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
