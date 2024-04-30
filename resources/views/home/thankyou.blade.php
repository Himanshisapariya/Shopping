@extends('home.layouts.app')

@include('admin.message')

@section('section')



{{-- <div class="container-fluid d-flex justify-content-center bg-secondary-subtle align-items-center vh-100">
    
  
    
   
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="card">
                <div class="card-body text-center">
                  <h1 class="card-title">Thank you!</h1>
                  <p class="card-text">We appreciate your time and feedback is important to us. If you have any comments or suggestions, please let us know.</p>
               
                    <div class="form-group">
                    </div>
                    <a href="{{ route('home.feedback') }}">
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div> --}}

        <div class="container-fluid bg-secondary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">
                    <a href="{{ route('home.feedback') }}">
                        <button type="submit" class="btn btn-primary">Share your Feedback</button>
                    </p>
                </div>
            </div>
        </div>

        

            @endsection