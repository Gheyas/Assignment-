@extends('front.app')
@section('title', 'Business | Nomad Concept Group')
@section('content')
<section class="visual">
    <div class="visual-inner blog-default-banner dark-overlay parallax" data-stellar-background-ratio="0.55" style="background-image: url('<?php echo asset('storage/back/' . $banner->business) ?>'); height: 300px;min-height:300px !important; padding: 0px;" >
        <div class="container">
            <div class="visual-text-large text-center visual-center">
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"> Home </a></li>
                        <li class="breadcrumb-item"><a href="{{route('business.index')}}"> Business </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/visual/banner of the page -->

<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block pt-5">
        <div class="container">
            <h2 class="text-center" style="margin-bottom: 30px !important;">Our Businesses</h2>
            <div class="tab-container tab-black tab-center-container text-left">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-button-nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab13" role="tab">Invested In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab14" role="tab">Mentored</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab15" role="tab">Partnered With</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="top-m-space tab-content">
                    <div class="tab-pane fade show active" id="tab13" role="tabpanel">
                        <div class="row multiple-row">
                            @forelse($businesses->where('relation', 'Invested') as $business)
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid reverse-grid reverse-grid">
                                        <div class="img-block post-img">
                                            <a href="{{route('business.show', $business)}}"><img
                                                    src="{{asset('storage/back/' . $business->image)}}"
                                                    alt="images"></a>
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0"><a
                                                    href="{{route('business.show', $business)}}"><a
                                                        href="{{route('business.show', $business)}}">{{$business->title}}</a></strong>
                                            <span class="content-sub-title">{{$business->subTitle}}</span>
                                            <p>{!! Str::limit($business->description, 100) !!}</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="{{route('business.show', $business)}}">View <span
                                                            class="fa fa-arrow-right"><span
                                                                class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4 class="my-0 mx-auto">No Business in this category yet</h4>
                            @endforelse
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab14" role="tabpanel">
                        <div class="row multiple-row">
                            @forelse($businesses->where('relation', 'Mentored') as $business)
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid reverse-grid reverse-grid">
                                        <div class="img-block post-img">
                                            <a href="{{route('business.show', $business)}}"><img
                                                    src="{{asset('storage/back/' . $business->image)}}"
                                                    alt="images"></a>
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0"><a
                                                    href="{{route('business.show', $business)}}"><a
                                                        href="{{route('business.show', $business)}}">{{$business->title}}</a></strong>
                                            <span class="content-sub-title">{{$business->subTitle}}</span>
                                            <p>{!! Str::limit($business->description, 100) !!}</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="{{route('business.show', $business)}}">View <span
                                                            class="fa fa-arrow-right"><span
                                                                class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4 class="my-0 mx-auto">No Business in this category yet</h4>
                            @endforelse
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab15" role="tabpanel">
                        <div class="row multiple-row">
                            @forelse($businesses->where('relation', 'Partnered') as $business)
                            <div class="col-md-6 col-lg-4">
                                <div class="col-wrap">
                                    <div class="post-grid reverse-grid reverse-grid">
                                        <div class="img-block post-img">
                                            <a href="{{route('business.show', $business)}}"><img
                                                    src="{{asset('storage/back/' . $business->image)}}"
                                                    alt="images"></a>
                                        </div>
                                        <div class="post-text-block bg-gray-light">
                                            <strong class="content-title mb-0"><a
                                                    href="{{route('business.show', $business)}}"><a
                                                        href="{{route('business.show', $business)}}">{{$business->title}}</a></strong>
                                            <span class="content-sub-title">{{$business->subTitle}}</span>
                                            <p>{!! Str::limit($business->description, 100) !!}</p>
                                            <div class="post-meta clearfix">
                                                <div class="post-link-holder">
                                                    <a href="{{route('business.show', $business)}}">View <span
                                                            class="fa fa-arrow-right"><span
                                                                class="sr-only">&nbsp;</span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4 class="my-0 mx-auto">No Business in this category yet</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
