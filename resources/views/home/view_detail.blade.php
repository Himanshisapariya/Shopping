@extends('home.layouts.app')

@include('admin.message')

@section('section')


 <!-- Page Header Start -->
 <div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop Detail</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Detail Start -->
<div class="container-fluid py-5">        
<form action="{{ route('cart',$product->id) }}">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="/images/{{ $product->image }}" alt="Image">
                    </div>
                   
                </div>
               
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{ $product->name }}</h3>
            
            <h3 class="font-weight-semi-bold mb-4 text-primary">Rs.{{ $product->price }}</h3>
            <p class="mb-4">{{ $product->description }}</p>
           
            <div class="d-flex align-items-center mb-4 pt-2">
                @if ($product->quantity == 0)
                       <h5><p class="font-weight-semi-bold text-primary">Product is outof stock</p></h5>
                   @else
                <h6 class="font-weight-semi-bold">Quantity</h6>
                   
                <div class="input-group quantity mr-3" style="width: 130px;">
                  
                    <input type="number" name="quantity" class="form-control bg-secondary text-center"  value="1" min="1" max="{{ $product->quantity }}">
                </div>

                <a href="">
                <button class="btn btn-primary px-3" type="submit"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
            </a>&nbsp;&nbsp;&nbsp;
      
            @endif
            <br><br>
        </form>
        <form action="{{ route('wishlist',$product->id)}}">
        <a href="">
            <button class="btn btn-primary px-3" type="submit"> <i class="fas fa-heart"></i> Add To wishlist</button>
           
        </a>
    </form>

            </div>
       
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
                
                
            </div>
<br><br>
        </div>
    </div>
 
   
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active text-primary" data-toggle="tab" href="#tab-pane-1">Description</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">{{ $product->description }}</p>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->






 
@endsection