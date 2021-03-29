@extends('front.app')
@section('title', 'About Us | Nomad Concept Group')
@section('content')
<!-- visual/banner of the page -->
<section class="visual">
    <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55"
        style="background-image: url('<?php echo asset('storage/back/' . $about->image) ?>')">
        <div class="container">
            <div class="visual-text-large text-left visual-center">
                <h1 class="visual-title visual-sub-title">About Us</h1>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"> Home </a></li>
                        <li class="breadcrumb-item"><a href="{{route('about.show', $abouts->first())}}"> About </a></li>
                        <li class="breadcrumb-item active"> {{$about->title}} </li>
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
        <div class="container text-center">
            <div class="heading">
                <h2>{{$about->title}}</h2>
            </div>
            <div class="description">
                <p>{!! $about->description !!}</p>
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
