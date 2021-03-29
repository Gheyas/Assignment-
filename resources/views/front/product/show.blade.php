@extends('front.app')
@section('title', $product->title . ' | Nomad Concept Group')
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
                        <li class="breadcrumb-item"> {{$product->title}} </li>
                    </ol>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="row multiple-row">
                        <div class="col-md-12">
                            <div class="blog-img float-right w-50 ml-4">
                                <div class="image-wrap">
                                    <figure class="w-100">
                                        <img src="{{asset('storage/back/' . $product->image)}}" alt="{{$product->title}}" class="w-100">
                                    </figure>
                                </div>
                            </div>
                            <div class="blog-title">
                                <h3 class="d-inline">{{$product->title}}</h3> <span>({{$product->price}} Af)</span>
                            </div>
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row w-100" style="margin-top: 100px;">
                    <div class="col-md-12 text-center">
                    <h3>Other Products</h3>
                    </div>
                    @foreach($others as $item)
                    <div class="col-lg-3 col-xl-3 gallery-item">
                            <a href="{{route('product.show', $item->id)}}">
                            <figure class="caption-hover-full">
                                <div class="image-wrapper"><img src="{{asset('storage/back/' . $item->image)}}" alt="{{$item->title}}" style="width: 270px; height: 170px;"></div>
                                <div class="image-details">
                                    <div class="figcaption">
                                        <div class="info">
                                            <h2 class="content-title">{{$item->title}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
