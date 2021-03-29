@extends('front.app')
@section('title', $blog->title . ' | Nomad Concept Group')
@section('content')
<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 less-wide">
                    <div class="blog-holder">
                        <article class="blog-article">
                            <div class="blog-title text-center pb-5">
                                <h1>{{$blog->title}}</h1>
                            </div>
                            <div class="blog-desc pt-5">
                                <div class="blog-img">
                                    <div class="image-wrap">
                                        <figure class="">
                                            <img src="{{asset('storage/back/' . $blog->image)}}" alt="{{$blog->title}}">
                                        </figure>
                                    </div>
                                </div>
                                <p>{!! $blog->description !!}</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->
@endsection
