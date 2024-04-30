
@extends('home.layouts.app')

@include('admin.message')

@section('section')


 <!-- Page Header Start -->
 <div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Feedback</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<form class="m-5 p-5" action="{{ route('sendfeedback') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
    <p class="d-flex center justify-content-center  col-md-6">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</p>
    <div class="form-group">
      <label for="feedbackMessage">Feedback Message</label>
      <textarea class="form-control" name="feedbackmessage" rows="3"></textarea>
    </div>
    <p class="d-flex center justify-content-center  col-md-6">
        @error('feedbackmessage')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</p>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection