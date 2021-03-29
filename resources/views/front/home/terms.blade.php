@extends('front.app')
@section('title', 'Terms of Service | Nomad Concept Group')
@section('content')
<div class="content-wrapper">
    <section class="content-block">
        <div class="container text-center">
            <div class="heading bottom-space">
                <h2>Terms of Service</h2>
            </div>
            <div class="description">
                <p>{!! $page->terms !!}</p>
            </div>
        </div>
    </section>
</div>
@endsection