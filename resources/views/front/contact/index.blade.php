@extends('front.app')
@section('title', 'Contact Us | Nomad Concept Group')
@section('content')
<!-- visual/banner of the page -->
<section class="visual visual-sub visual-no-bg">
    <div class="visual-inner no-overlay bg-gray-light">
        <div class="centered">
            <div class="container">
                <div class="visual-text visual-center">
                    <h1 class="visual-title visual-sub-title">Contact Us</h1>
                    <div class="breadcrumb-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/visual/banner of the page -->
<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block pb-0">
        <div class="container">
            <div class="contact-container">
                <h6 class="content-title contact-title">GET IN TOUCH WITH US</h6>
                @if(session('message') == 'sent') <h6 class="text-success">Your Message Was Successfully Sent, We Respost ASAP.</h6> @endif
                <div class="row">
                    <div class="col-lg-6">
                        <!-- contact form -->
                        <form action="{{route('contact.submit')}}" method="post" id="contact_form" class="waituk_contact-form">
                           @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="FIRST NAME *" id="con_fname" name="fname"
                                            class="form-control" value="{{old('fname')}}" required>
                                    </div>
                                </div>
                                <span class="text-danger">{{$errors->first('fname')}}</span>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="LAST NAME *" id="con_lname" name="lname"
                                            class="form-control" value="{{old('lname')}}" required>
                                    </div>
                                </div>
                                <span class="text-danger">{{$errors->first('lname')}}</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" placeholder="PHONE NUMBER" id="con_phone" name="phone"
                                            class="form-control" value="{{old('phone')}}" required>
                                    </div>
                                </div>
                                <span class="text-danger">{{$errors->first('phone')}}</span>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="EMAIL ADDRESS *" id="email"
                                            name="email" class="form-control" value="{{old('email')}}" required>
                                    </div>
                                </div>
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="MESSAGE *" id="message"
                                    name="message" required>{{old('message')}}</textarea>
                            </div>
                            <span class="text-danger">{{$errors->first('message')}}</span>
                            <div class="btn-container">
                                <button id="btn_sent" class="btn btn-primary btn-arrow">SEND MESSAGE</button>
                                <p id="error_message"> </p>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-xl-5 offset-xl-1">
                        <div class="info-slot mb-0">
                            <div class="icon"><span class="custom-icon-map-marker"></span></div>
                            <div class="text">
                                <address>{{$info->address}}</address>
                            </div>
                        </div>
                        <div class="info-slot mb-0">
                            <div class="icon"><span class="custom-icon-headset"></span></div>
                            <div class="text">
                                <ul class="content-list contact-list">
                                    <li> <a href="tel:{{$info->phone}}">{{$info->phone}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-slot mb-0">
                            <div class="icon"><span class="custom-icon-message"></span></div>
                            <div class="text">
                                <ul class="content-list contact-list">
                                    <li><a href="mailto:{{$info->email}}">{{$info->email}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-holder embed-responsive-21by9 grayscaled-map">
        <iframe class="embed-responsive-item"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.0605547231917!2d-0.33554378354576586!3d51.47540277962994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760cf99dee6c25%3A0xc9d2780dbbcbb933!2sLondon+Rd%2C+Isleworth+TW7%2C+UK!5e0!3m2!1sen!2snp!4v1473394388477"
            height="450" style="border:0"></iframe>
    </div>
</div>
<!--/main content wrapper -->
@endsection
