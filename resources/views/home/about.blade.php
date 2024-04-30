

@extends('home.layouts.app')

@include('admin.message')

@section('section')


<div class="container">
    <h1 class="text-center my-5">About Us</h1>
    <div class="row">
      <div class="col-md-6">
        <p>Welcome to our electronics e-commerce website! We are a team of passionate and experienced professionals who are dedicated to providing high-quality electronics products to our customers.</p>
        <p>Our mission is to make the latest electronics products accessible and affordable to everyone. We believe that technology should be available to all, and we strive to offer a wide range of products that cater to different needs and budgets.</p>
        <p>We have been in the electronics industry for over a decade and have built strong relationships with leading manufacturers and suppliers. This allows us to offer our customers the best products at competitive prices.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ url('/images/about.jpg') }}"  height="250px" width="500px" alt="About Us" class="img-fluid">
      </div>
    </div>
    <div class="row my-5">
      <div class="col-md-6">
        <h5>Our Mission</h5>
        <p>Our mission is to make the latest electronics products accessible and affordable to everyone. We believe that technology should be available to all, and we strive to offer a wide range of products that cater to different needs and budgets.</p>
      </div>
      <div class="col-md-6">
        <h5>Our Team</h5>
        <p>We have a team of passionate and experienced professionals who are dedicated to providing high-quality electronics products to our customers. Our team is committed to providing excellent customer service and ensuring a seamless shopping experience for our customers.</p>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-md-6">
        <h5>Our Partners</h5>
        <p>We have built strong relationships with leading manufacturers and suppliers in the electronics industry. This allows us to offer our customers the best products at competitive prices.</p>
      </div>
      <div class="col-md-6">
        <h5>Our Commitment</h5>
        <p>We are committed to providing excellent customer service and ensuring a seamless shopping experience for our customers. We have a user-friendly website that is easy to navigate, and our customer support team is available to assist you with any questions or concerns you may have.</p>
      </div>
    </div>
  </div>

  @endsection