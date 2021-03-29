@extends('front.app')
@section('title', 'Privacy Policy | Nomad Concept Group')
@section('content')
<div class="content-wrapper">
    <section class="content-block">
        <div class="container text-center">
            <div class="heading bottom-space">
                <h2>Privacy Policy</h2>
            </div>
            <div class="description">
                <p>{!! $page->privacy !!}</p>
            </div>
        </div>
    </section>
</div>
@endsection