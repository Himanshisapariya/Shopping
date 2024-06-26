@extends('home.layouts.app')

@include('admin.message')

@section('section')

@include('admin.message')
  <!-- Checkout Start -->
  <form action="{{ route('billing') }}" method="post">
@csrf
  <div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text" name="firstname" placeholder="">
                    </div>
                    <p class="d-flex center justify-content-center  col-md-6">
                        @error('firstname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                    <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="lastname" placeholder="">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" name="email" placeholder="Your Email Address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" type="text" name="mobile" placeholder="">
                    </div>
                    <p class="d-flex center justify-content-center  col-md-6">
                        @error('mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>
                    <div class="col-md-6 form-group">
                        <label>Address Line 1</label>
                        {{-- <input class="form-control" type="text" name="address" placeholder="Enter Your Full Shipping Address Here."> --}}
                        <textarea name="address" placeholder="Enter Your Full Shipping Address Here." id="" class="form-control"  cols="30" rows="10"></textarea>
                    </div>
                    <p class="d-flex center justify-content-center  col-md-6">
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </p>

            
                    
                    
                   
                
                </div>
            </div>
         
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Products</h5>
                    <?php $total = 0 ?>
                    @foreach ($data as $data)
                        
                    <div class="d-flex justify-content-between">
                        <p>{{ $data->name }}</p>
                        <p>{{ $data->price }}</p>
                    </div>
                   <?php $total = $total + $data->price * $data->quantity ?>
                    @endforeach

                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">{{ $total }}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">0</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">{{ $total }}</h5>
                    </div>
                </div>
            </div>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Payment</h4>
                </div>
                <div class="card-body">
                    
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Cash On Delivery</label>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<!-- Checkout End -->


 
@endsection 