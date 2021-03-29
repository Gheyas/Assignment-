@extends('front.app')
@section('title', 'Covid 19 Products | Nomad Concept Group')
@section('content')
<!-- visual/banner of the page -->
<section class="visual">
    <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55"
        style="background-image: url('<?php echo asset('storage/back/' . $banner->product) ?>')">
        <div class="container">
            <div class="visual-text-large text-left visual-center">
                <h1 class="visual-title visual-sub-title">Products</h1>
                <div class="breadcrumb-block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"> Home </a></li>
                        <li class="breadcrumb-item"><a href="{{route('product.index')}}"> Products </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/visual/banner of the page -->

<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block portfolio-block">
      <div class="row">
      <div class="col-md-2">
        <ul class="filter-nav filter-nav-v2 text-center button-group filter-button-group ">
            <li>
                <button class="is-checked" data-filter="*">ALL</button>
            </li>
            @foreach($categories as $category)
            <li>
                <button data-filter=".{{$category->title}}">{{$category->title}}</button>
            </li>
            @endforeach
        </ul>
      </div>
      <div class="col-md-8">
        <div class="container">
            <div class="masonary-block grid">
                <div class="gallery-sizer"></div>
                @foreach($categories as $category)
                    @foreach($category->products as $porduct)
                        <div class="col-md-4 gallery-item {{$category->title}}">
                            <a href="{{route('product.show', $porduct)}}">
                            <figure class="caption-hover-full">
                                <div class="image-wrapper"><img src="{{asset('storage/back/' . $porduct->image)}}" alt="{{$porduct->title}}"></div>
                                <div class="image-details">
                                    <div class="figcaption">
                                        <div class="info">
                                            <h2 class="content-title">{{$porduct->title}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
