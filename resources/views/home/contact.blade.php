
@extends('home.layouts.app')

@include('admin.message')

@section('section')




    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{ route('home.contactstore') }}" novalidate="novalidate" method="post">
                        @csrf
                        <div class="control-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" required class="form-control" id="email" name="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                                <p class="d-flex center justify-content-center  col-md-6">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            
                        </div>
                        <p class="help-block text-danger">@error('subject')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror</p>
 <div class="control-group">
 <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"
                                required="required" required
                                data-validation-required-message="Please enter your message"></textarea>
                                
                        </div>
                        <p class="d-flex center justify-content-center  col-md-6">
                            @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </p>    
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
    
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <p>If You Have Any Queries RElated To Our Products And Services Contact Us Via,</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>E-shopper , kuvadava Road ,Rajkot</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>eshpper@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+ 91 7684364929</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>E-shopper , Near Kotecha Chowk, Nirmala Road,Rajkot</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>shopindia@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+091 345467890</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


 
@endsection