@extends('front.app')
@section('title', $service->title . ' | Nomad Concept Group')
@section('content')
<!-- visual/banner of the page -->
<section class="visual">
    <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55"
        style="background-image: url('<?php echo asset('storage/back/' . $service->image) ?>')">
        <div class="container">
            <div class="visual-text-large text-center visual-center">
                <h1 class="visual-title visual-sub-title">{{$service->title}}</h1>
            </div>
        </div>
    </div>
</section>
<!--/visual/banner of the page -->
<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block pt-5">
        <div class="container text-center">
            <div class="heading">
                <h3>{{$service->title}}</h3>
            </div>
            <div class="description">
                <p>{!! $service->description !!}</p>
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
