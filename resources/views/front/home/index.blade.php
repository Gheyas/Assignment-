@extends('front.app')
@section('title', 'Home | Nomad Concept Group')
@section('content')
<!-- Slider -->
<div class="d-none d-lg-block">
<div class="banner banner-home .d-none .d-xs-block">
    <!-- revolution slider starts -->
    <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header"
        style="margin:0px auto;background-color:#fff;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display:none;" data-version="5.1.4">
            <ul>
                <li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7"
                    data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-description="">
                    <video style="width: inherit;" preload="metadata" loop autoplay>
                        <source src="{{asset('front/videos/COVID-19.mp4')}}" type="video/mp4">
                    </video>

                    <div class="tp-caption tp-shape tp-shapewrapper" id="slide-1699-layer-10"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                        data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                        data-basealign="slide" data-responsive_offset="on" data-responsive="on"
                        data-frames='[{"from":"y:0;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="background-color:rgba(0, 0, 0, 0.57);"> </div>
                    <div class="slider-main-title text-white tp-caption tp-resizeme rs-parallaxlevel-1"
                        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','middle','middle']" data-voffset="['250','150','50','50']"
                        data-width="['1200','960','720','540']" data-textalign="left"
                        data-fontsize="['160','88','64','48']" data-fontweight="900"
                        data-letterspacing="['25','10','5','0']" data-lineheight="['184','100','72','60']"
                        data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                        data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                        <span style="text-align: center; letter-spacing: 0px; font-size: 4rem; text-transform: none;">
                            {{$slider->title}}</span>
                    </div>
                    <div class="slider-text text-white tp-caption tp-resizeme rs-parallaxlevel-2"
                        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','middle','middle']" data-voffset="['450','230','110','110']"
                        data-width="['600','555','555','480']" data-textalign="left"
                        data-fontsize="['16','14','14','14']" data-lineheight="['30','30','22','22']"
                        data-fontweight="400" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                        data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                        <span
                            style="text-align: center; letter-spacing: 0px; font-size: 30px; text-transform: none; margin-top: 30px;">
                            {{$slider->subtitle}}</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<!-- WHO WE ARE -->
<section class="content-block">
    <div class="container">
        <div class="row multiple-row v-align-row">
            <div class="col-lg-4 col-md-6">
                <div class="col-wrap">
                    <div class="block-heading">
                        <h1 class="block-top-heading">Who We Are</h1>
                        <div class="divider"><img src="{{asset('front/img/divider.png')}}" alt="images description">
                        </div>
                    </div>
                </div>
            </div>
            @foreach($icons as $icon)
            <div class="col-lg-4 col-md-6">
                <div class="col-wrap">
                    <div class="ico-box bg-gray-light has-radius-medium">
                        <div class="icon">
                            <img src="{{asset('storage/back/' . $icon->image)}}" alt="{{$icon->title}}"
                                style="height: 45px;">
                        </div>
                        <h4 class="content-title"><a href="#">{{$icon->title}}</a></h4>
                        <div class="des">
                            <p>{{$icon->description}}</p>
                        </div>
                        <div class="link-holder">
                            <a class="link-more" href="{{$icon->link}}">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-4 col-md-6">
                <div class="col-wrap">
                    <div class="ico-box bg-gray-light has-radius-medium" style="height: 291px;">
                        <div class="icon">
                            <img src="{{asset('front/img/future.png')}}" alt="Eye" style="height: 45px;">
                        </div>
                        <h4 class="content-title"><a href="#">Our Vision</a></h4>
                        <div class="des">
                            <p>{{$info->vision}}</p>
                        </div>
                        <div class="link-holder">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="col-wrap">
                    <div class="ico-box bg-gray-light has-radius-medium" style="height: 291px;">
                        <div class="icon">
                            <img src="{{asset('front/img/mission.png')}}" alt="Eye" style="height: 45px;">
                        </div>
                        <h4 class="content-title"><a href="#">Our Mission</a></h4>
                        <div class="des">
                            <p>{{$info->mission}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner -->
<section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55"
    style="background-image: url('<?php echo asset('storage/back/' . $banner->image); ?>')">
    <div class="container">
        <div class="inner-wrapper">
            <h2 class="text-white">{{$banner->text}}</h2>
        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section class="content-block portfolio-block" id="container">
    <div class="block-heading bottom-space text-center text-uppercase">
        <h2>Our Products</h2>
    </div>
    <ul class="filter-nav text-center button-group filter-button-group">
        <li>
            <button data-filter="*">ALL</button>
        </li>
        @foreach($categories as $category)
        <li>
            <button data-filter=".{{$category->title}}">{{$category->title}}</button>
        </li>
        @endforeach
    </ul>
    <div class="row grid">
        @foreach($categories as $category)
        @foreach($category->products->take(3) as $product)
        <div class="gallery-item col-lg-4 col-md-6 {{$category->title}}">
            <a href="{{route('product.show', $product)}}">
                <figure class="caption-hover-full">
                    <div class="image-wrapper"><img src="{{asset('storage/back/' . $product->image)}}"
                            alt="{{$product->title}}" style="min-width: 100%;"></div>
                    <div class="image-details">
                        <div class="figcaption">
                            <div class="info">
                                <h2 class="content-title">{{$product->title}}</h2>
                            </div>
                        </div>
                    </div>
                </figure>
            </a>
        </div>
        @endforeach
        @endforeach
    </div>
</section>

<!-- Counter -->
<section class="content-block count-block text-center p-0 parallax" data-stellar-background-ratio="0.55"
    style="background-image: url('<?php echo asset('storage/back/' . $counter->image) ?>');">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-6 col-lg-3">
                <div class="col-wrap">
                    <h3 class="number">{{$counter->v1}}</h3>
                    <div class="text text-uppercase">{{$counter->c1}}</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="col-wrap">
                    <h3 class="number">{{$counter->v2}}</h3>
                    <div class="text text-uppercase">{{$counter->c2}}</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="col-wrap">
                    <h3 class="number">{{$counter->v3}}</h3>
                    <div class="text text-uppercase">{{$counter->c3}}</div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="col-wrap">
                    <h3 class="number">{{$counter->v4}}</h3>
                    <div class="text text-uppercase">{{$counter->c4}}</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Covid 19 Response -->
<section class="content-block">
    <div class="container">
        <div class="demo-wrapper">
            <div class="block-heading bottom-space text-center text-uppercase">
                <h2>Covid 19 Response</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row text-center w-100">
                        @foreach($options as $option)
                        <div class="col-md-6">
                            <div class="col-wrap">
                                <div class="ico-box bg-gray-light has-radius-medium" style="heigth: 100%;">
                                    <h3>{{$option->option}}</h3>
                                    <div class="divider-border mt-0"><span class="sr-only"></span></div>
                                    @foreach($option->items as $item)
                                    <h5 class="text-left">&bull; {{$item->item}}</h5>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
