@extends('front.app')
@section('title', 'Our Team | Nomad Concept Group')
@section('content')
<!-- visual/banner of the page -->
<section class="visual">
    <div class="visual-inner visual-banner dark-overlay parallax" data-stellar-background-ratio="0.55" style="background-image: url('<?php echo asset('storage/back/' . $banner->about) ?>');">
        <div class="container">
            <div class="visual-text-large text-left visual-center">
                <h1 class="visual-title visual-sub-title">Our Team</h1>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"> Home </a></li>
                        <li class="breadcrumb-item"><a href="{{route('about.show', $abouts->first())}}">  About </a></li>
                        <li class="breadcrumb-item active"> Our Team </li>
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
                <h2>Our Team</h2>
            </div>
            <div class="row">
               @foreach($members as $member)
                <div class="col-md-4">
                    <figure class="team-box caption-fade-up">
                        <div class="img-block">
                            <img src="{{asset('storage/back/' . $member->image)}}" alt="images description">
                        </div>
                        <figcaption class="team-des-v2">
                            <span class="sub">{{$member->title}}</span>
                            <strong class="content-title name">{{$member->name}}</strong>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
